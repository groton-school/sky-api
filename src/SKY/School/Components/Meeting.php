<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Meeting
 *
 * @property int $section_id The id of the section
 * @property ?string $section_identifier The section identifier
 * @property ?string $course_title The title of the course
 * @property ?string $group_name The auto generated name of the group
 * @property int $block_id The id of the block
 * @property ?string $block_name The name of the block
 * @property int $room_id The id of the room where the meeting takes place
 * @property ?string $room_name The name of the room where the meeting takes
 *   place
 * @property int $room_number The room number where the meeting takes place
 * @property int $room_capacity The room capacity
 * @property ?string $room_code The room code
 * @property int $faculty_user_id The user id of the faculty member
 * @property ?string $faculty_name The combined name of the head faculty
 *   member
 * @property ?string $faculty_firstname The faculty member's first name
 * @property ?string $faculty_lastname The faculty member's last name
 * @property string $start_time The start time of the meeting
 * @property string $end_time The end time of the meeting
 * @property string $meeting_date The date the meeting takes place
 * @property bool $attendance_required Returns true if attendance is required
 *   to be taken for this meeting
 * @property bool $attendance_taken Return true if attendance was taken
 * @property int $num_absent The number of absent students for this meeting
 * @property int $attendance_id the id of the attendance record
 * @property int $level_number The level number the meeting belongs to
 * @property \Blackbaud\SKY\School\Components\OfferingType $offering_type
 *   OfferingType Model
 * @property string $created_date The date the section was created
 * @property string $modified_date The date the section was last modified
 * @property int $last_modified_user_id The identifier of the user that last
 *   modified the section
 * @property ?\Blackbaud\SKY\School\Components\Teacher[] $teachers The list of
 *   teachers for the meeting
 *
 * @api
 */
class Meeting extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "section_id",
        "section_identifier",
        "course_title",
        "group_name",
        "block_id",
        "block_name",
        "room_id",
        "room_name",
        "room_number",
        "room_capacity",
        "room_code",
        "faculty_user_id",
        "faculty_name",
        "faculty_firstname",
        "faculty_lastname",
        "start_time",
        "end_time",
        "meeting_date",
        "attendance_required",
        "attendance_taken",
        "num_absent",
        "attendance_id",
        "level_number",
        "offering_type",
        "created_date",
        "modified_date",
        "last_modified_user_id",
        "teachers",
    ];
}
