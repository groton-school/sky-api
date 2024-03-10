<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medication create
 *
 * @property int $user_id The ID of the student
 * @property string $medication_type The ID or description of the medication
 *   type
 * @property string $date_as_of The date when medication began. Use format ...
 *   Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $date_until The date when medication ended. Use format
 *   ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $location The ID or description of the location of the
 *   medication.
 * @property ?string $dosage The dosage of the medication to dispense
 * @property \Blackbaud\SKY\School\Components\MedicationDosageCreate $dispense
 *   Determines the frequency the medication is dispensed.
 * @property ?int[] $conditions The list of student condition IDs for the
 *   condition. If included, this list will replace the existing list of
 *   conditions on the medication.
 * @property ?int[] $allergies The list of student allergy IDs for the
 *   allergy. If included, this list will replace the existing list of allegies
 *   on the medication.
 * @property ?string $notes Notes for medication
 * @property ?\Blackbaud\SKY\School\Components\MedicalSecurityRole[]
 *   $role_access Array of roles
 *
 * @api
 */
class StudentMedicationCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "medication_type" => "string",
        "date_as_of" => "string",
        "date_until" => "string",
        "location" => "string",
        "dosage" => "string",
        "dispense" => "\Blackbaud\SKY\School\Components\MedicationDosageCreate",
        "conditions" => "int[]",
        "allergies" => "int[]",
        "notes" => "string",
        "role_access" => "\Blackbaud\SKY\School\Components\MedicalSecurityRole[]",
    ];
}
