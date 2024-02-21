<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $section_name The name of the section the assignment was
 *   assigned in
 * @property ?int $section_id The id of the section the assignment was
 *   assigned in
 * @property ?int $assignment_id The id of the assignment
 * @property ?string $short_description The short description for the
 *   assignment
 * @property ?string $date_assigned The date the assignment was assigned
 * @property ?string $date_due The date the assignment is due
 * @property ?string $long_description The long description of the assignment
 * @property ?string $assignment_type The type of the assignment
 * @property bool $grade_book Returns true if the assignment is included in
 *   the GradeBook
 * @property bool $online_submission Returns true if the assignment is an
 *   online submission assignment
 * @property ?int $assignment_status The status of the assignment
 * @property bool $assessment Returns true if this assignment is an assessment
 * @property ?int $assessment_id The id of the assessment
 * @property bool $assessment_locked Returns true if the assessment is locked
 * @property ?int $major
 * @property bool $discussion Returns true if the assignment has a discussion
 * @property bool $formative Returns true if the assignment is formative
 * @property bool $exempt Returns true if ther student is exempt from this
 *   assignment
 * @property bool $incomplete Returns true if the assignment is incomplete
 * @property bool $late Returns true if the assignment is late
 * @property bool $missing Returns true if the assignment is missing
 * @property bool $rubric Returns true if the assignment is included in the
 *   rubric
 * @property bool $user_task Returns true if the assignment is a user
 *   generated task
 *
 * @api
 */
class StudentAssignment extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "section_name" => "string",
        "section_id" => "int",
        "assignment_id" => "int",
        "short_description" => "string",
        "date_assigned" => "string",
        "date_due" => "string",
        "long_description" => "string",
        "assignment_type" => "string",
        "grade_book" => "bool",
        "online_submission" => "bool",
        "assignment_status" => "int",
        "assessment" => "bool",
        "assessment_id" => "int",
        "assessment_locked" => "bool",
        "major" => "int",
        "discussion" => "bool",
        "formative" => "bool",
        "exempt" => "bool",
        "incomplete" => "bool",
        "late" => "bool",
        "missing" => "bool",
        "rubric" => "bool",
        "user_task" => "bool",
    ];
}
