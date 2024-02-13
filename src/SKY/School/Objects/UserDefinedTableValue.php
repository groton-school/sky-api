<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * User Defined Table Values
 *
 * @property int | null $table_id 
 * @property int | null $table_value_id 
 * @property string | null $value_name 
 * @property string | null $value_abbreviation 
 * @property bool | null $in_use 
 * @property bool | null $active 
 * @property int | null $sort 
 * @property int | null $base_table_value_id 
 * @property bool | null $base_value 
 *
 * @api
 */
class UserDefinedTableValue extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["table_id","table_value_id","value_name","value_abbreviation","in_use","active","sort","base_table_value_id","base_value"];
}
