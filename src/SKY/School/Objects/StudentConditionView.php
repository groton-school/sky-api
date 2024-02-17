<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medical condition
 *
 * @property int $id The ID of the student’s condition
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $condition
 * @property string $date_as_of The start date for the condition.
 * @property string $date_until The end date for the condition.
 * @property string $notes The notes for the condition.
 * @property \Blackbaud\SKY\School\Objects\StudentMedication[]
 *   $student_medications An array of student medication objects.
 *
 * @api
 */
class StudentConditionView extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "condition",
        "date_as_of",
        "date_until",
        "notes",
        "student_medications",
    ];
}
