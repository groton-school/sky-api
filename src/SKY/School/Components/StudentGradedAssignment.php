<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student Graded Assignments Model
 *
 * @property ?int $assignment_id The ID of the assignment
 * @property ?int $assignment_index_id The index ID of the assignment
 * @property ?string $short_description The short description for the
 *   assignment
 * @property ?string $date_assigned The date the assignment was assigned
 * @property ?string $date_due The date the assignment is due
 * @property ?float $max_points The maximum points for the assignment
 * @property ?float $points The graded number of points for the assignment
 * @property ?float $assignment_percentage The percentage grade for the
 *   assignment
 * @property ?string $letter The letter grade for the assignment
 * @property ?float $section_grade The cumulative grade for the section
 * @property ?bool $formative Returns true if the assignment is formative
 * @property ?bool $missing Returns true if the assignment is missing
 * @property ?bool $late Returns true if the assignment is late
 * @property ?bool $incomplete Returns true if the assignment is incomplete
 * @property ?bool $exempt Returns true if the assignment is exempt
 * @property ?string $comment Comment for the assignment
 * @property \Blackbaud\SKY\School\Components\AssignmentType $assignment_type
 *   Assignment Type Model
 *
 * @api
 */
class StudentGradedAssignment extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "assignment_id" => "int",
        "assignment_index_id" => "int",
        "short_description" => "string",
        "date_assigned" => "string",
        "date_due" => "string",
        "max_points" => "float",
        "points" => "float",
        "assignment_percentage" => "float",
        "letter" => "string",
        "section_grade" => "float",
        "formative" => "bool",
        "missing" => "bool",
        "late" => "bool",
        "incomplete" => "bool",
        "exempt" => "bool",
        "comment" => "string",
        "assignment_type" => "\Blackbaud\SKY\School\Components\AssignmentType",
    ];
}
