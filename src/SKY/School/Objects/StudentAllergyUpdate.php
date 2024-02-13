<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student allergy update
 *
 * @property string | null $date_as_of The date the allergy began. Use format
 *   ...
 * @property string | null $date_until The date the allergy ended. Use format
 *   ...
 * @property string | null $notes The notes for the allergy
 * @property string | null $allergy_signs The signs of an allergic reaction
 * @property string | null $minor_reaction_response The response for a minor
 *   allergic reaction
 * @property string | null $major_reaction_response The response for a major
 *   allergic reaction
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\MedicalSecurityRole[] |
 *   null $role_access Array of roles. If a role is not included, default
 *   access will be set to true
 * @property int[] | null $medications The list of student medication IDs for
 *   the allergy. If included, this list will replace the existing list of
 *   medications.
 *
 * @api
 */
class StudentAllergyUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","role_access","medications"];
}
