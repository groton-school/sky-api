<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student Graded Assignments Model
 *
 * @property int | null $assignment_id The ID of the assignment
 * @property int | null $assignment_index_id The index ID of the assignment
 * @property string | null $short_description The short description for the
 *   assignment
 * @property string | null $date_assigned The date the assignment was assigned
 * @property string | null $date_due The date the assignment is due
 * @property float | null $max_points The maximum points for the assignment
 * @property float | null $points The graded number of points for the
 *   assignment
 * @property float | null $assignment_percentage The percentage grade for the
 *   assignment
 * @property string | null $letter The letter grade for the assignment
 * @property float | null $section_grade The cumulative grade for the section
 * @property bool | null $formative Returns true if the assignment is
 *   formative
 * @property bool | null $missing Returns true if the assignment is missing
 * @property bool | null $late Returns true if the assignment is late
 * @property bool | null $incomplete Returns true if the assignment is
 *   incomplete
 * @property bool | null $exempt Returns true if the assignment is exempt
 * @property string | null $comment Comment for the assignment
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\AssignmentType
 *   $assignment_type Assignment Type Model
 *
 * @api
 */
class StudentGradedAssignment extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["assignment_id","assignment_index_id","short_description","date_assigned","date_due","max_points","points","assignment_percentage","letter","section_grade","formative","missing","late","incomplete","exempt","comment","assignment_type"];
}
