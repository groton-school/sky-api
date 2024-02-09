<?php

namespace GrotonSchool\Blackbaud\OpenAPI;

use GrotonSchool\Blackbaud\CLI;
use GrotonSchool\Blackbaud\OpenAPI\ReservedWords;
use splitbrain\phpcli\Colors;
use Webmozart\PathUtil\Path;

class ObjectMap
{
    /**
     * @var array<string, mixed> $definition
     */
    private $definition;
    private string $basePath;

    /**
     * @param array<string, mixed> $definition
     * @param bool $deleteOldObjects
     */
    private function __construct(array $definition, bool $deleteOldObjects = true)
    {
        $this->definition = $definition;
        $this->basePath = Path::join([
          __DIR__,
          "../SKY/Object",
          ReservedWords::divide($this->definition["info"]["title"]),
          $this->parseVersion(),
        ]);
        @mkdir($this->basePath, 0744, true);
        $this->basePath = realpath($this->basePath);

        if ($deleteOldObjects) {
            $this->deleteOldObjects();
        }

        $this->map();
    }

    /**
     * @param array<string, mixed> $definition
     * @param bool $deleteOldObjects
     *
     * @return void
     * @api
     */
    public static function build(array $definition, bool $deleteOldObjects): void
    {
        new ObjectMap($definition, $deleteOldObjects);
    }

    private function deleteOldObjects(): void
    {
        CLI::get()->warning(
            CLI::get()->colors->wrap("Deleting contents of ", Colors::C_RED) .
            CLI::get()->colors->wrap($this->basePath, Colors::C_CYAN)
        );
        foreach (scandir($this->basePath) as $file) {
            if (!is_dir("$this->basePath/$file")) {
                unlink("$this->basePath/$file");
            }
        }
    }

    private function map(): void
    {
        ReservedWords::init();
        foreach ($this->definition["components"]["schemas"] as $name => $schema) {
            $name = ReservedWords::filter($name);
            $namespace =
              "GrotonSchool\\Blackbaud\\SKY\\Object\\" .
              ReservedWords::divide($this->definition["info"]["title"], "\\") .
              "\\" .
              $this->parseVersion();
            CLI::get()->info(
                "Mapping " .
                CLI::get()->colors->wrap("$namespace\\$name", Colors::C_YELLOW)
            );
            $filePath = "$this->basePath/$name.php";
            $description = "";
            if (
                array_key_exists("description", $schema) &&
                !empty($schema["description"])
            ) {
                $description =
                  " * " . $schema["description"] . PHP_EOL . " *" . PHP_EOL;
            }
            $fileContents = "<?php

namespace $namespace;

use GrotonSchool\\Blackbaud\\SKY\\Object\\Base;

/**
$description";
            $fields = [];
            if (array_key_exists("properties", $schema)) {
                foreach ($schema["properties"] as $key => $property) {
                    array_push($fields, $key);
                    $description = null;
                    if (array_key_exists("type", $property)) {
                        $method = TypeMap::callback($property["type"]);
                        $type = TypeMap::$method($property);
                        if ($property["type"] == "array") {
                            // $description = $api["components"]["schemas"][$type]["description"];
                        }
                        // TODO handle enums
                    } else {
                        $type = basename($property['$ref']);
                        $description = array_key_exists(
                            "description",
                            $this->definition["components"]["schemas"][$type]
                        )
                          ? $this->definition["components"]["schemas"][$type]["description"]
                          : "";
                    }
                    $nullable = empty($property["nullable"]) ? "" : "|null";
                    $fileContents .=
                      " * @property $type$nullable $$key $description" . PHP_EOL;
                }
            }
            // TODO additionalProperties
            $fileContents .=
              " * @api
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
        }
    }

    private function parseVersion(): string
    {
        $version = $this->definition["info"]["version"];
        if (is_numeric($version)) {
            return "V" . floor((float) $version);
        } elseif (preg_match("/^v(\d+)p\d+/", $version, $match)) {
            return "V$match[1]";
        }
        throw new OpenAPIException(
            "cannot parse version $version",
            OpenAPIException::VERSION_ERROR
        );
    }
}
