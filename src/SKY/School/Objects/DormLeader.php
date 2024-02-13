<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $building_id 
 * @property string | null $display_name 
 * @property bool | null $is_admin 
 * @property bool | null $is_head 
 * @property int | null $owner_type 
 * @property string | null $resident_from_date 
 * @property int | null $room_id 
 * @property int | null $section_id 
 * @property int | null $user_id 
 * @property string | null $first_name 
 * @property string | null $last_name 
 * @property string | null $maiden_name 
 * @property string | null $prefix 
 * @property string | null $suffix 
 * @property string | null $middle_name 
 * @property string | null $display 
 * @property string | null $date_of_birth 
 *
 * @api
 */
class DormLeader extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["building_id","display_name","is_admin","is_head","owner_type","resident_from_date","room_id","section_id","user_id","first_name","last_name","maiden_name","prefix","suffix","middle_name","display","date_of_birth"];
}
