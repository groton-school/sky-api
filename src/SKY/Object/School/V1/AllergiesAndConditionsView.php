<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student medical allergy/condition
 *
 * @property int $id
 * @property string|null $type
 * @property IdDescriptorField $allergy_condition_type
 * @property string|null $date_as_of
 * @property string|null $date_until
 * @property string|null $notes
 * @property string|null $allergy_signs
 * @property string|null $minor_reaction_response
 * @property string|null $major_reaction_response
 * @property StudentMedicationRead[]|null $medications
 * @api
 */
class AllergiesAndConditionsView extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","type","allergy_condition_type","date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","medications"];
}
