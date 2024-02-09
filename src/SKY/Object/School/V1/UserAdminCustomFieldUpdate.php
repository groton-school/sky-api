<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Object that describes the custom field to be created
 *
 * @property string|null $id
 * @property int $field_id
 * @property int $data_type_id
 * @property int|null $int_value
 * @property string|null $text_value
 * @property double|null $decimal_value
 * @property string|null $date_value
 * @property bool|null $bit_value
 * @api
 */
class UserAdminCustomFieldUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","field_id","data_type_id","int_value","text_value","decimal_value","date_value","bit_value"];
}
