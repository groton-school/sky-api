<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student allergy update
 *
 * @property string|null $date_as_of
 * @property string|null $date_until
 * @property string|null $notes
 * @property string|null $allergy_signs
 * @property string|null $minor_reaction_response
 * @property string|null $major_reaction_response
 * @property MedicalSecurityRole[]|null $role_access
 * @property _int|null $medications
 * @api
 */
class StudentAllergyUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","role_access","medications"];
}
