<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medical allergy/condition
 *
 * @property int $id The ID of student medical allergy/conditon
 * @property string | null $type Medical type
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\IdDescriptorField
 *   $allergy_condition_type 
 * @property string | null $date_as_of The date the allergy or condition
 *   began. Use format ...
 * @property string | null $date_until The date the allergy or condition
 *   ended. Use format ...
 * @property string | null $notes The notes for a allergy/condition
 * @property string | null $allergy_signs The signs of an allergic reaction
 * @property string | null $minor_reaction_response The response for a minor
 *   allergic reaction
 * @property string | null $major_reaction_response The response for a major
 *   allergic reaction
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\StudentMedicationRead[]
 *   | null $medications Collection of medicines
 *
 * @api
 */
class AllergiesAndConditionsView extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","type","allergy_condition_type","date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","medications"];
}
