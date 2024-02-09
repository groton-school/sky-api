<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student medical allergy
*
* @property int $user_id
* @property string $allergy
* @property string $date_as_of
* @property string|null $date_until
* @property string|null $notes
* @property string|null $allergy_signs
* @property string|null $minor_reaction_response
* @property string|null $major_reaction_response
* @property StudentAccessRole[]|null $access_roles
* @property int[]|null $student_medications
@api
*/
class StudentMedicalAllergy extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","allergy","date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","access_roles","student_medications"];
}
