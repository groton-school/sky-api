<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication create
 *
 * @property int $user_id The ID of the student
 * @property string $medication_type The ID or description of the medication
 *   type
 * @property string $date_as_of The date when medication began. Use format ...
 *   
 * @property string | null $date_until The date when medication ended. Use
 *   format ...
 * @property string | null $location The ID or description of the location of
 *   the medication.
 * @property string | null $dosage The dosage of the medication to dispense
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\MedicationDosageCreate
 *   $dispense Determines the frequency the medication is dispensed.
 * @property int[] | null $conditions The list of student condition IDs for
 *   the condition. If included, this list will replace the existing list of
 *   conditions on the medication.
 * @property int[] | null $allergies The list of student allergy IDs for the
 *   allergy. If included, this list will replace the existing list of
 *   allegies on the medication.
 * @property string | null $notes Notes for medication
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\MedicalSecurityRole[] |
 *   null $role_access Array of roles
 *
 * @api
 */
class StudentMedicationCreate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","medication_type","date_as_of","date_until","location","dosage","dispense","conditions","allergies","notes","role_access"];
}
