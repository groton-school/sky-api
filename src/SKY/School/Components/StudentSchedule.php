<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class StudentSchedule extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "section_id",
        "section_identifier",
        "course_title",
        "course_code",
        "section_name",
        "block_id",
        "block_name",
        "room_id",
        "room_name",
        "room_number",
        "room_capacity",
        "room_code",
        "faculty_name",
        "faculty_firstname",
        "faculty_lastname",
        "start_time",
        "end_time",
        "meeting_date",
        "faculty_user_id",
        "attendance_required",
        "offering_type",
    ];
}
