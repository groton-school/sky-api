<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Object that describes the custom field to be created
*
* @property int $field_id
* @property int $data_type_id
* @property int|null $int_value
* @property string|null $text_value
* @property double|null $decimal_value
* @property string|null $date_value
* @property bool|null $bit_value
@api
*/
class UserAdminCustomFieldCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["field_id","data_type_id","int_value","text_value","decimal_value","date_value","bit_value"];
}
