<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
 * @property \Blackbaud\SKY\School\Components\OfferingType $offering_type An
 *   object with offering type information
 * @property string $created_date The date the section was created
 * @property string $modified_date The date the section was last modified
 * @property int $last_modified_user_id The identifier of the user that last
 *   modified the section
 * @property ?\Blackbaud\SKY\School\Components\Teacher[] $teachers The list of
 *   teachers for the meeting
 *
 * @api
 */
class Meeting extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "section_id" => "int",
        "section_identifier" => "string",
        "course_title" => "string",
        "group_name" => "string",
        "block_id" => "int",
        "block_name" => "string",
        "room_id" => "int",
        "room_name" => "string",
        "room_number" => "int",
        "room_capacity" => "int",
        "room_code" => "string",
        "faculty_user_id" => "int",
        "faculty_name" => "string",
        "faculty_firstname" => "string",
        "faculty_lastname" => "string",
        "start_time" => "string",
        "end_time" => "string",
        "meeting_date" => "string",
        "attendance_required" => "bool",
        "attendance_taken" => "bool",
        "num_absent" => "int",
        "attendance_id" => "int",
        "level_number" => "int",
        "offering_type" => "\Blackbaud\SKY\School\Components\OfferingType",
        "created_date" => "string",
        "modified_date" => "string",
        "last_modified_user_id" => "int",
        "teachers" => "\Blackbaud\SKY\School\Components\Teacher[]",
    ];
}
