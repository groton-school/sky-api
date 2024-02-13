<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $field_id 
 * @property string | null $field_name 
 * @property int | null $table_id 
 * @property string | null $table_name 
 * @property int | null $data_type_id 
 * @property string | null $data_type 
 * @property int | null $location_index_id 
 * @property string | null $location 
 * @property bool | null $active 
 * @property bool | null $unique 
 * @property bool | null $required 
 * @property bool | null $in_use 
 * @property bool | null $usage_not_unique 
 * @property int | null $location_id 
 * @property int | null $sub_location_id 
 * @property string | null $sub_location 
 * @property bool | null $use_abbreviation 
 * @property int | null $vendor_id 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserDefinedTable
 *   $table User Defined Table
 *
 * @api
 */
class AdminCustomFields extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["field_id","field_name","table_id","table_name","data_type_id","data_type","location_index_id","location","active","unique","required","in_use","usage_not_unique","location_id","sub_location_id","sub_location","use_abbreviation","vendor_id","table"];
}
