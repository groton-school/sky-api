<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Section Model
 *
 * @property int | null $id The ID of the section
 * @property string $begin_date The begin date of the course. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property int | null $block_id The block ID for a section
 * @property string | null $block_name The block name for a section
 * @property bool $blocks Returns true if the course has blocks
 * @property string | null $building_name The building name
 * @property int | null $changed_sections changed sections
 * @property string | null $course_code The identifier used to reference a
 *   course; the Course Code is a user-entered value
 * @property int | null $course_length The length of a course
 * @property string | null $course_title The title of the course
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Department[] | null
 *   $departments The list of departments the section is associated with
 * @property string | null $distinction distinction
 * @property int | null $dropped was the course dropped
 * @property string $duration_begin_date The begin date of the duration. Uses
 *   <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $duration_description The description of the
 *   starting term of the section
 * @property string $duration_end_date The end date of the duration. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property int $duration_id The duration ID for a section
 * @property string | null $duration_name The starting term of the section
 * @property string $end_date The end date of the course. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property string | null $faculty_first_name The first name of the head
 *   teacher
 * @property string | null $faculty_last_name The last name of the head
 *   teacher
 * @property int $level_number level number
 * @property string | null $offering_description The description of an
 *   offering type
 * @property int | null $offering_id The ID of an offered course
 * @property int | null $offering_type_id The ID of an offering type
 * @property int | null $room_id The room ID for a section
 * @property string | null $room_name The room name for the section
 * @property string | null $room_number The room number for the section
 * @property string | null $school_year The school year date range in which
 *   the section occurs
 * @property string | null $section_identifier The identifier used to
 *   differentiate between multiple sections that contain a course; the
 *   Section Identifier is a user-entered value
 *
 * @api
 */
class Enrollment extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","block_id","block_name","blocks","building_name","changed_sections","course_code","course_length","course_title","departments","distinction","dropped","duration_begin_date","duration_description","duration_end_date","duration_id","duration_name","end_date","faculty_first_name","faculty_last_name","level_number","offering_description","offering_id","offering_type_id","room_id","room_name","room_number","school_year","section_identifier"];
}
