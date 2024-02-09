<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Section Model
 *
 * @property int|null $id
 * @property string $begin_date
 * @property int|null $block_id
 * @property string|null $block_name
 * @property bool $blocks
 * @property string|null $building_name
 * @property int|null $changed_sections
 * @property string|null $course_code
 * @property int|null $course_length
 * @property string|null $course_title
 * @property Department[]|null $departments
 * @property string|null $distinction
 * @property int|null $dropped
 * @property string $duration_begin_date
 * @property string|null $duration_description
 * @property string $duration_end_date
 * @property int $duration_id
 * @property string|null $duration_name
 * @property string $end_date
 * @property string|null $faculty_first_name
 * @property string|null $faculty_last_name
 * @property int $level_number
 * @property string|null $offering_description
 * @property int|null $offering_id
 * @property int|null $offering_type_id
 * @property int|null $room_id
 * @property string|null $room_name
 * @property string|null $room_number
 * @property string|null $school_year
 * @property string|null $section_identifier
 * @api
 */
class Enrollment extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","begin_date","block_id","block_name","blocks","building_name","changed_sections","course_code","course_length","course_title","departments","distinction","dropped","duration_begin_date","duration_description","duration_end_date","duration_id","duration_name","end_date","faculty_first_name","faculty_last_name","level_number","offering_description","offering_id","offering_type_id","room_id","room_name","room_number","school_year","section_identifier"];
}
