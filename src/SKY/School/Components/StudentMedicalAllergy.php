<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medical allergy
 *
 * @property int $user_id The user ID of the student.
 * @property string $allergy The ID or description of the allergy.
 * @property string $date_as_of The start date for the allergy. Use ISO-8601
 *   date format: 2022-08-31.
 * @property ?string $date_until The end date for the allergy. Use ISO-8601
 *   date format: 2022-08-31.
 * @property ?string $notes The notes for the allergy.
 * @property ?string $allergy_signs The signs of an allergic reaction
 * @property ?string $minor_reaction_response The response for a minor
 *   allergic reaction
 * @property ?string $major_reaction_response The response for a major
 *   allergic reaction
 * @property ?\Blackbaud\SKY\School\Components\StudentAccessRole[]
 *   $access_roles An array of access role objects.
 * @property ?int[] $student_medications An array of student medication ID
 *   integers.
 *
 * @api
 */
class StudentMedicalAllergy extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "allergy" => "string",
        "date_as_of" => "string",
        "date_until" => "string",
        "notes" => "string",
        "allergy_signs" => "string",
        "minor_reaction_response" => "string",
        "major_reaction_response" => "string",
        "access_roles" => "\Blackbaud\SKY\School\Components\StudentAccessRole[]",
        "student_medications" => "int[]",
    ];
}
