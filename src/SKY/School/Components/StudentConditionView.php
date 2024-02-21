<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medical condition
 *
 * @property int $id The ID of the student’s condition
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $condition
 * @property ?string $date_as_of The start date for the condition.
 * @property ?string $date_until The end date for the condition.
 * @property ?string $notes The notes for the condition.
 * @property ?\Blackbaud\SKY\School\Components\StudentMedication[]
 *   $student_medications An array of student medication objects.
 *
 * @api
 */
class StudentConditionView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "condition" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
        "date_as_of" => "string",
        "date_until" => "string",
        "notes" => "string",
        "student_medications" => "\Blackbaud\SKY\School\Components\StudentMedication[]",
    ];
}
