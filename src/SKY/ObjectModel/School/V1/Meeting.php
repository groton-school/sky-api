<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Meeting
*
* @property int $section_id
* @property string|null $section_identifier
* @property string|null $course_title
* @property string|null $group_name
* @property int $block_id
* @property string|null $block_name
* @property int $room_id
* @property string|null $room_name
* @property int $room_number
* @property int $room_capacity
* @property string|null $room_code
* @property int $faculty_user_id
* @property string|null $faculty_name
* @property string|null $faculty_firstname
* @property string|null $faculty_lastname
* @property string $start_time
* @property string $end_time
* @property string $meeting_date
* @property bool $attendance_required
* @property bool $attendance_taken
* @property int $num_absent
* @property int $attendance_id
* @property int $level_number
* @property OfferingType $offering_type OfferingType Model
* @property string $created_date
* @property string $modified_date
* @property int $last_modified_user_id
* @property Teacher[]|null $teachers
@api
*/
class Meeting extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["section_id","section_identifier","course_title","group_name","block_id","block_name","room_id","room_name","room_number","room_capacity","room_code","faculty_user_id","faculty_name","faculty_firstname","faculty_lastname","start_time","end_time","meeting_date","attendance_required","attendance_taken","num_absent","attendance_id","level_number","offering_type","created_date","modified_date","last_modified_user_id","teachers"];
}
