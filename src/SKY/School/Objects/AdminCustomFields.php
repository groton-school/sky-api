<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $field_id
 * @property string $field_name
 * @property int $table_id
 * @property string $table_name
 * @property int $data_type_id
 * @property string $data_type
 * @property int $location_index_id
 * @property string $location
 * @property bool $active
 * @property bool $unique
 * @property bool $required
 * @property bool $in_use
 * @property bool $usage_not_unique
 * @property int $location_id
 * @property int $sub_location_id
 * @property string $sub_location
 * @property bool $use_abbreviation
 * @property int $vendor_id
 * @property \Blackbaud\SKY\School\Objects\UserDefinedTable $table User
 *   Defined Table
 *
 * @api
 */
class AdminCustomFields extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "field_id",
        "field_name",
        "table_id",
        "table_name",
        "data_type_id",
        "data_type",
        "location_index_id",
        "location",
        "active",
        "unique",
        "required",
        "in_use",
        "usage_not_unique",
        "location_id",
        "sub_location_id",
        "sub_location",
        "use_abbreviation",
        "vendor_id",
        "table",
    ];
}
