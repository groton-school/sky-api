<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Attendance Model
 *
 * @property int $id
 * @property bool $attendance_of_record
 * @property bool $attendance_type
 * @property string|null $block_name
 * @property string|null $comment
 * @property string|null $date
 * @property string|null $excuse_category_description
 * @property int $excuse_category_id
 * @property string|null $excuse_description
 * @property int $excuse_type_id
 * @property int $excused
 * @property string|null $grad_year
 * @property string|null $grade
 * @property int $grade_level_sort
 * @property string|null $group_name
 * @property string|null $photo_file_name
 * @property string|null $section
 * @property int $section_id
 * @property string|null $student_name
 * @property int $student_user_id
 * @property string|null $teacher_name
 * @api
 */
class AttendanceGet extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","attendance_of_record","attendance_type","block_name","comment","date","excuse_category_description","excuse_category_id","excuse_description","excuse_type_id","excused","grad_year","grade","grade_level_sort","group_name","photo_file_name","section","section_id","student_name","student_user_id","teacher_name"];
}
