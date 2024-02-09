<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student medication create
 *
 * @property int $user_id
 * @property string $medication_type
 * @property string $date_as_of
 * @property string|null $date_until
 * @property string|null $location
 * @property string|null $dosage
 * @property MedicationDosageCreate $dispense Determines the frequency the medication is dispensed.
 * @property _int|null $conditions
 * @property _int|null $allergies
 * @property string|null $notes
 * @property MedicalSecurityRole[]|null $role_access
 * @api
 */
class StudentMedicationCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","medication_type","date_as_of","date_until","location","dosage","dispense","conditions","allergies","notes","role_access"];
}
