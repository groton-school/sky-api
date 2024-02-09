<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Schedule Item
*
* @property int|null $section_id
* @property string|null $section_identifier
* @property string|null $course_title
* @property string|null $course_code
* @property string|null $section_name
* @property int|null $block_id
* @property string|null $block_name
* @property int|null $room_id
* @property string|null $room_name
* @property string|null $room_number
* @property int|null $room_capacity
* @property string|null $room_code
* @property string|null $faculty_name
* @property string|null $faculty_firstname
* @property string|null $faculty_lastname
* @property string|null $start_time
* @property string|null $end_time
* @property string|null $meeting_date
* @property int|null $faculty_user_id
* @property bool|null $attendance_required
* @property OfferingType $offering_type OfferingType Model
@api
*/
class StudentSchedule extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["section_id","section_identifier","course_title","course_code","section_name","block_id","block_name","room_id","room_name","room_number","room_capacity","room_code","faculty_name","faculty_firstname","faculty_lastname","start_time","end_time","meeting_date","faculty_user_id","attendance_required","offering_type"];
}
