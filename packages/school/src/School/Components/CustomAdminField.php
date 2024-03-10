<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Custom Field
 *
 * @property ?string $id Id
 * @property int $data_type_id Data Type Id
 * @property ?string $data_type Data Type
 * @property ?string $data_type_description Data Type Description
 * @property int $field_id The custom field Id
 * @property ?string $field_name Field Name
 * @property ?bool $bit_value Bit Value
 * @property ?int $int_value Int Value
 * @property ?float $decimal_value Decimal Value
 * @property ?string $text_value Text Value
 * @property ?string $date_value Date Value
 * @property int $last_modified_user_id Last Modified User Id
 * @property string $last_modified_date Last Modified Date
 * @property bool $status Status
 * @property bool $unique Unique
 * @property bool $required Required
 * @property ?int $table_id Table Id
 * @property ?int $table_value_id Table Value Id
 * @property ?string $table_value Table Value
 * @property ?string $table_value_abbreviation Table Value Abbreviation
 *
 * @api
 */
class CustomAdminField extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "data_type_id" => "int",
        "data_type" => "string",
        "data_type_description" => "string",
        "field_id" => "int",
        "field_name" => "string",
        "bit_value" => "bool",
        "int_value" => "int",
        "decimal_value" => "float",
        "text_value" => "string",
        "date_value" => "string",
        "last_modified_user_id" => "int",
        "last_modified_date" => "string",
        "status" => "bool",
        "unique" => "bool",
        "required" => "bool",
        "table_id" => "int",
        "table_value_id" => "int",
        "table_value" => "string",
        "table_value_abbreviation" => "string",
    ];
}
