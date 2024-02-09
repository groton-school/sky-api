<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student medical allergy/condition
*
* @property int $user_id
* @property string $type
* @property string $allergy_condition_type
* @property string $date_as_of
* @property string|null $date_until
* @property string|null $allergy_signs
* @property string|null $minor_reaction_response
* @property string|null $major_reaction_response
* @property MedicalSecurityRole[]|null $role_access
* @property int[]|null $medications
@api
*/
class StudentMedicalAllergyCondition extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","type","allergy_condition_type","date_as_of","date_until","allergy_signs","minor_reaction_response","major_reaction_response","role_access","medications"];
}
