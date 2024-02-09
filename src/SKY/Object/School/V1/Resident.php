<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $building_id
 * @property bool|null $is_admin
 * @property bool|null $is_head
 * @property int|null $owner_type
 * @property string|null $resident_from_date
 * @property int|null $room_id
 * @property int|null $section_id
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $nick_name
 * @property string|null $prefix
 * @property string|null $suffix
 * @property string|null $middle_name
 * @property string|null $display
 * @property string|null $date_of_birth
 * @property DormStudentInfo[]|null $student_info
 * @api
 */
class Resident extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["building_id","is_admin","is_head","owner_type","resident_from_date","room_id","section_id","user_id","first_name","last_name","nick_name","prefix","suffix","middle_name","display","date_of_birth","student_info"];
}
