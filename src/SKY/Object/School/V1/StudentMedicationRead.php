<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student medication
 *
 * @property int $id
 * @property IdDescriptorField $medication_type
 * @property string|null $date_as_of
 * @property string|null $date_until
 * @property IdDescriptorField $location
 * @property string|null $dosage
 * @property MedicationDosage $dispense
 * @property string|null $notes
 * @property AllergyRead[]|null $allergies
 * @property ConditionRead[]|null $conditions
 * @api
 */
class StudentMedicationRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","medication_type","date_as_of","date_until","location","dosage","dispense","notes","allergies","conditions"];
}
