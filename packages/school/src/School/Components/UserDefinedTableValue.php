<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * User Defined Table Values
 *
 * @property ?int $table_id
 * @property ?int $table_value_id
 * @property ?string $value_name
 * @property ?string $value_abbreviation
 * @property ?bool $in_use
 * @property ?bool $active
 * @property ?int $sort
 * @property ?int $base_table_value_id
 * @property ?bool $base_value
 *
 * @api
 */
class UserDefinedTableValue extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "table_id" => "int",
        "table_value_id" => "int",
        "value_name" => "string",
        "value_abbreviation" => "string",
        "in_use" => "bool",
        "active" => "bool",
        "sort" => "int",
        "base_table_value_id" => "int",
        "base_value" => "bool",
    ];
}
