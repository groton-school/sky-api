<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $id The ID of student medication
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\IdDescriptorField
 *   $medication_type 
 * @property string | null $date_as_of The date the allergy or condition
 *   began. Use format ...
 * @property string | null $date_until The date the allergy or condition
 *   ended. Use format ...
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\IdDescriptorField
 *   $location 
 * @property string | null $dosage The dosage of medication
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\MedicationDosage
 *   $dispense 
 * @property string | null $notes The notes/comments for the medication.
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\AllergyRead[] | null
 *   $allergies The list of allergies this medication can treat.
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\ConditionRead[] | null
 *   $conditions The list of conditions this medication can treat.
 *
 * @api
 */
class StudentMedicationRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","medication_type","date_as_of","date_until","location","dosage","dispense","notes","allergies","conditions"];
}
