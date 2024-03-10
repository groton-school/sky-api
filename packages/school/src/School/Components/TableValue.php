<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id
 * @property ?string $name
 * @property ?string $abbreviation
 * @property bool $active
 *
 * @api
 */
class TableValue extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "abbreviation" => "string",
        "active" => "bool",
    ];
}
