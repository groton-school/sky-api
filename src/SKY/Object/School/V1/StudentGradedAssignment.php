<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student Graded Assignments Model
 *
 * @property int|null $assignment_id
 * @property int|null $assignment_index_id
 * @property string|null $short_description
 * @property string|null $date_assigned
 * @property string|null $date_due
 * @property float|null $max_points
 * @property float|null $points
 * @property float|null $assignment_percentage
 * @property string|null $letter
 * @property float|null $section_grade
 * @property bool|null $formative
 * @property bool|null $missing
 * @property bool|null $late
 * @property bool|null $incomplete
 * @property bool|null $exempt
 * @property string|null $comment
 * @property AssignmentType $assignment_type Assignment Type Model
 * @api
 */
class StudentGradedAssignment extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["assignment_id","assignment_index_id","short_description","date_assigned","date_due","max_points","points","assignment_percentage","letter","section_grade","formative","missing","late","incomplete","exempt","comment","assignment_type"];
}
