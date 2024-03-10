<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Schedule Item
 *
 * @property ?int $section_id The Id of the section
 * @property ?string $section_identifier The identifier of the section
 * @property ?string $course_title The title of the course
 * @property ?string $course_code The code of the course
 * @property ?string $section_name The name of the section
 * @property ?int $block_id The Id of the block the section is scheduled in
 * @property ?string $block_name The name of the block the section is
 *   scheduled in
 * @property ?int $room_id The Id of the room the section takes place in
 * @property ?string $room_name The name of the room the section takes place
 *   in
 * @property ?string $room_number The number of the room the section takes
 *   place in
 * @property ?int $room_capacity The capacity of the room the section takes
 *   place in
 * @property ?string $room_code The code of the room the section takes place
 *   in
 * @property ?string $faculty_name The full name of the head teacher
 * @property ?string $faculty_firstname The first name of the head teacher
 * @property ?string $faculty_lastname The last name of the head teacher
 * @property ?string $start_time The start time of the meeting
 * @property ?string $end_time The end time of the meeting
 * @property ?string $meeting_date The date the meeting takes place
 * @property ?int $faculty_user_id The user Id of the head teacher
 * @property ?bool $attendance_required Returns true if attendance is required
 * @property \Blackbaud\SKY\School\Components\OfferingType $offering_type
 *   OfferingType Model
 *
 * @api
 */
class StudentSchedule extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "section_id" => "int",
        "section_identifier" => "string",
        "course_title" => "string",
        "course_code" => "string",
        "section_name" => "string",
        "block_id" => "int",
        "block_name" => "string",
        "room_id" => "int",
        "room_name" => "string",
        "room_number" => "string",
        "room_capacity" => "int",
        "room_code" => "string",
        "faculty_name" => "string",
        "faculty_firstname" => "string",
        "faculty_lastname" => "string",
        "start_time" => "string",
        "end_time" => "string",
        "meeting_date" => "string",
        "faculty_user_id" => "int",
        "attendance_required" => "bool",
        "offering_type" => "\Blackbaud\SKY\School\Components\OfferingType",
    ];
}
