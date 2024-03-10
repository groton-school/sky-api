<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The Id of the Degree, Major, Minor, or Concentration
 * @property ?string $name The name of the Degree, Major, Minor, or
 *   Concentration
 * @property ?string $abbreviation The abbreviation of the Degree, Major,
 *   Minor, or Concentration
 *
 * @api
 */
class Concentration extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "abbreviation" => "string",
    ];
}
