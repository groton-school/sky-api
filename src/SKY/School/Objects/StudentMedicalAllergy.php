<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medical allergy
 *
 * @property int $user_id The user ID of the student.
 * @property string $allergy The ID or description of the allergy.
 * @property string $date_as_of The start date for the allergy. Use ISO-8601
 *   date format: 2022-08-31.
 * @property string | null $date_until The end date for the allergy. Use
 *   ISO-8601 date format: 2022-08-31.
 * @property string | null $notes The notes for the allergy.
 * @property string | null $allergy_signs The signs of an allergic reaction
 * @property string | null $minor_reaction_response The response for a minor
 *   allergic reaction
 * @property string | null $major_reaction_response The response for a major
 *   allergic reaction
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\StudentAccessRole[] |
 *   null $access_roles An array of access role objects.
 * @property int[] | null $student_medications An array of student medication
 *   ID integers.
 *
 * @api
 */
class StudentMedicalAllergy extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","allergy","date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","access_roles","student_medications"];
}
