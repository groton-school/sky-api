<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student medical allergy
 *
 * @property int $id
 * @property IdDescriptorField $allergy
 * @property string|null $date_as_of
 * @property string|null $date_until
 * @property string|null $notes
 * @property string|null $allergy_signs
 * @property string|null $minor_reaction_response
 * @property string|null $major_reaction_response
 * @property StudentMedication[]|null $student_medications
 * @api
 */
class StudentAllergiesView extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","allergy","date_as_of","date_until","notes","allergy_signs","minor_reaction_response","major_reaction_response","student_medications"];
}
