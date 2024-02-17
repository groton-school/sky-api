<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Custom Field
 *
 * @property string $id Id
 * @property int $data_type_id Data Type Id
 * @property string $data_type Data Type
 * @property string $data_type_description Data Type Description
 * @property int $field_id The custom field Id
 * @property string $field_name Field Name
 * @property bool $bit_value Bit Value
 * @property int $int_value Int Value
 * @property float $decimal_value Decimal Value
 * @property string $text_value Text Value
 * @property string $date_value Date Value
 * @property int $last_modified_user_id Last Modified User Id
 * @property string $last_modified_date Last Modified Date
 * @property bool $status Status
 * @property bool $unique Unique
 * @property bool $required Required
 * @property int $table_id Table Id
 * @property int $table_value_id Table Value Id
 * @property string $table_value Table Value
 * @property string $table_value_abbreviation Table Value Abbreviation
 *
 * @api
 */
class CustomAdminField extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "data_type_id",
        "data_type",
        "data_type_description",
        "field_id",
        "field_name",
        "bit_value",
        "int_value",
        "decimal_value",
        "text_value",
        "date_value",
        "last_modified_user_id",
        "last_modified_date",
        "status",
        "unique",
        "required",
        "table_id",
        "table_value_id",
        "table_value",
        "table_value_abbreviation",
    ];
}
