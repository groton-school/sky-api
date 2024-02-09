<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Custom Field
 *
 * @property string|null $id
 * @property int $data_type_id
 * @property string|null $data_type
 * @property string|null $data_type_description
 * @property int $field_id
 * @property string|null $field_name
 * @property bool|null $bit_value
 * @property int|null $int_value
 * @property float|null $decimal_value
 * @property string|null $text_value
 * @property string|null $date_value
 * @property int $last_modified_user_id
 * @property string $last_modified_date
 * @property bool $status
 * @property bool $unique
 * @property bool $required
 * @property int|null $table_id
 * @property int|null $table_value_id
 * @property string|null $table_value
 * @property string|null $table_value_abbreviation
 * @api
 */
class CustomAdminField extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","data_type_id","data_type","data_type_description","field_id","field_name","bit_value","int_value","decimal_value","text_value","date_value","last_modified_user_id","last_modified_date","status","unique","required","table_id","table_value_id","table_value","table_value_abbreviation"];
}
