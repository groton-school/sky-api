<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medical condition
 *
 * @property int $user_id The user ID of the student.
 * @property string $condition The ID or description of the condition.
 * @property string $date_as_of The start date for the condition. Use ISO-8601
 *   date format: 2022-08-31.
 * @property ?string $date_until The end date for the condition. Use ISO-8601
 *   date format: 2022-08-31.
 * @property ?string $notes The notes for the condition.
 * @property ?\Blackbaud\SKY\School\Components\StudentAccessRole[]
 *   $access_roles An array of access role objects.
 * @property ?int[] $student_medications An array of student medication ID
 *   integers.
 *
 * @api
 */
class StudentMedicalCondition extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "condition" => "string",
        "date_as_of" => "string",
        "date_until" => "string",
        "notes" => "string",
        "access_roles" => "\Blackbaud\SKY\School\Components\StudentAccessRole[]",
        "student_medications" => "int[]",
    ];
}
