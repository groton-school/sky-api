<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $field_id
 * @property ?string $field_name
 * @property ?int $table_id
 * @property ?string $table_name
 * @property ?int $data_type_id
 * @property ?string $data_type
 * @property ?int $location_index_id
 * @property ?string $location
 * @property ?bool $active
 * @property ?bool $unique
 * @property ?bool $required
 * @property ?bool $in_use
 * @property ?bool $usage_not_unique
 * @property ?int $location_id
 * @property ?int $sub_location_id
 * @property ?string $sub_location
 * @property ?bool $use_abbreviation
 * @property ?int $vendor_id
 * @property \Blackbaud\SKY\School\Components\UserDefinedTable $table User
 *   Defined Table
 *
 * @api
 */
class AdminCustomFields extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "field_id" => "int",
        "field_name" => "string",
        "table_id" => "int",
        "table_name" => "string",
        "data_type_id" => "int",
        "data_type" => "string",
        "location_index_id" => "int",
        "location" => "string",
        "active" => "bool",
        "unique" => "bool",
        "required" => "bool",
        "in_use" => "bool",
        "usage_not_unique" => "bool",
        "location_id" => "int",
        "sub_location_id" => "int",
        "sub_location" => "string",
        "use_abbreviation" => "bool",
        "vendor_id" => "int",
        "table" => "\Blackbaud\SKY\School\Components\UserDefinedTable",
    ];
}
