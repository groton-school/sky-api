<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * User Defined Table
 *
 * @property ?int $table_id
 * @property ?string $table_name
 * @property ?bool $use_abbreviations
 * @property ?bool $in_use
 * @property ?bool $base_table
 * @property ?bool $system_table
 * @property ?bool $require_abbreviation
 * @property ?string $modify_user
 * @property ?int $vendor_id
 * @property ?\Blackbaud\SKY\School\Components\UserDefinedTableValue[] $values
 *
 * @api
 */
class UserDefinedTable extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "table_id" => "int",
        "table_name" => "string",
        "use_abbreviations" => "bool",
        "in_use" => "bool",
        "base_table" => "bool",
        "system_table" => "bool",
        "require_abbreviation" => "bool",
        "modify_user" => "string",
        "vendor_id" => "int",
        "values" => "\Blackbaud\SKY\School\Components\UserDefinedTableValue[]",
    ];
}
