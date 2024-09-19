<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Attendance Model
 *
 * @property int $id The ID of the attendance
 * @property bool $attendance_of_record Attendance of record
 * @property bool $attendance_type The type of the attendance
 * @property ?string $block_name The name of the block
 * @property ?string $comment Attendance record comment
 * @property ?string $date The date of the attendance record. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?string $excuse_category_description The category description of
 *   the excuse
 * @property int $excuse_category_id The category of the excuse
 * @property ?string $excuse_description The description of the excuse
 * @property int $excuse_type_id The type of the excuse
 * @property int $excused Whether the absence was excused
 * @property ?string $grad_year The graduation year of the student
 * @property ?string $grade The grade of the student
 * @property int $grade_level_sort Grade level sort order
 * @property ?string $group_name The group name
 * @property ?string $photo_file_name The phone file name
 * @property ?string $section The section
 * @property int $section_id The ID of the section
 * @property ?string $student_name The name of the student
 * @property int $student_user_id The student user ID
 * @property ?string $teacher_name The name of the teacher
 *
 * @api
 */
class AttendanceGet extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "attendance_of_record" => "bool",
        "attendance_type" => "bool",
        "block_name" => "string",
        "comment" => "string",
        "date" => "string",
        "excuse_category_description" => "string",
        "excuse_category_id" => "int",
        "excuse_description" => "string",
        "excuse_type_id" => "int",
        "excused" => "int",
        "grad_year" => "string",
        "grade" => "string",
        "grade_level_sort" => "int",
        "group_name" => "string",
        "photo_file_name" => "string",
        "section" => "string",
        "section_id" => "int",
        "student_name" => "string",
        "student_user_id" => "int",
        "teacher_name" => "string",
    ];
}
