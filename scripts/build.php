#!/usr/bin/env php
<?php

require __DIR__ . "/../vendor/autoload.php";

use GrotonSchool\Blackbaud\SKY\ObjectModel\ObjectModelException;
use sspat\ReservedWords\ReservedWords;

$reserved = new ReservedWords();

function avoidReservedWords(string $value): string
{
    global $reserved;
    if ($reserved->isReserved($value)) {
        return avoidReservedWords("_$value");
    }
    return $value;
}

$typeMap = [
  "boolean" => fn() => "bool",
  "integer" => fn() => "int",
  "string" => function ($type) {
      // TODO enum
      return "string";
  },
  "number" => function ($type) {
      return $type["format"];
  },
  "array" => function ($type, $map) {
      $result = null;
      if (array_key_exists('$ref', $type["items"])) {
          $result = basename($type["items"]['$ref']) . "[]";
      } elseif (array_key_exists("type", $type["items"])) {
          $result = $map[$type["items"]["type"]]($type["items"]) . "[]";
      }
      if ($result) {
          return avoidReservedWords($result);
      } else {
          throw new ObjectModelException(
              "unknown array items type " . json_encode($type),
              ObjectModelException::TYPE_ERROR
          );
      }
  },
];

// OpenAPI 3 JSON downloaded from https://developer.sky.blackbaud.com/api#api=school
$api = json_decode(file_get_contents(__DIR__ . "/school.json"), true);

$basePath = __DIR__ . "/../src/SKY/ObjectModel/School/V1";
foreach (scandir($basePath) as $file) {
    if ($file !== "." && $file !== "..") {
        unlink("$basePath/$file");
    }
}

foreach ($api["components"]["schemas"] as $name => $schema) {
    $name = avoidReservedWords($name);
    $filePath = "$basePath/$name.php";
    $description = "";
    if (
        array_key_exists("description", $schema) &&
        !empty($schema["description"])
    ) {
        $description = "* " . $schema["description"] . PHP_EOL . "*" . PHP_EOL;
    }
    $fileContents = "<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
$description";
    $fields = [];
    foreach ($schema["properties"] as $key => $property) {
        array_push($fields, $key);
        $type = null;
        $description = null;
        if (array_key_exists("type", $property)) {
            $type = $typeMap[$property["type"]]($property, $typeMap);
            if ($property["type"] == "array") {
                // $description = $api["components"]["schemas"][$type]["description"];
            }
            // TODO handle enums
        } else {
            $type = basename($property['$ref']);
            $description = $api["components"]["schemas"][$type]["description"];
        }
        $nullable = empty($property["nullable"]) ? "" : "|null";
        $fileContents .= "* @property $type$nullable $$key $description" . PHP_EOL;
    }
    $fileContents .=
      "@api
*/
class $name extends Base
{
    /** @var string[] \$fields */
    protected static array \$fields = " .
      json_encode($fields) .
      ";
}
";
    file_put_contents($filePath, $fileContents);
    echo $name . PHP_EOL;
}
