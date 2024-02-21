<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Level Model
 *
 * @property ?int $id The ID of a school level
 * @property ?string $abbreviation The abbreviation associated with a school
 *   level
 * @property ?string $name The label used to identify a school level
 *
 * @api
 */
class Level extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "abbreviation" => "string",
        "name" => "string",
    ];
}
