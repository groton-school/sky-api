<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Schedule Item
 *
 * @property int | null $section_id The Id of the section
 * @property string | null $section_identifier The identifier of the section
 * @property string | null $course_title The title of the course
 * @property string | null $course_code The code of the course
 * @property string | null $section_name The name of the section
 * @property int | null $block_id The Id of the block the section is scheduled
 *   in
 * @property string | null $block_name The name of the block the section is
 *   scheduled in
 * @property int | null $room_id The Id of the room the section takes place in
 * @property string | null $room_name The name of the room the section takes
 *   place in
 * @property string | null $room_number The number of the room the section
 *   takes place in
 * @property int | null $room_capacity The capacity of the room the section
 *   takes place in
 * @property string | null $room_code The code of the room the section takes
 *   place in
 * @property string | null $faculty_name The full name of the head teacher
 * @property string | null $faculty_firstname The first name of the head
 *   teacher
 * @property string | null $faculty_lastname The last name of the head teacher
 * @property string | null $start_time The start time of the meeting
 * @property string | null $end_time The end time of the meeting
 * @property string | null $meeting_date The date the meeting takes place
 * @property int | null $faculty_user_id The user Id of the head teacher
 * @property bool | null $attendance_required Returns true if attendance is
 *   required
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\OfferingType
 *   $offering_type OfferingType Model
 *
 * @api
 */
class StudentSchedule extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["section_id","section_identifier","course_title","course_code","section_name","block_id","block_name","room_id","room_name","room_number","room_capacity","room_code","faculty_name","faculty_firstname","faculty_lastname","start_time","end_time","meeting_date","faculty_user_id","attendance_required","offering_type"];
}
