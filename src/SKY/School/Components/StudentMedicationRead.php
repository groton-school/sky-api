<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $id The ID of student medication
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField
 *   $medication_type
 * @property ?string $date_as_of The date the allergy or condition began. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $date_until The date the allergy or condition ended. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $location
 * @property ?string $dosage The dosage of medication
 * @property \Blackbaud\SKY\School\Components\MedicationDosage $dispense
 * @property ?string $notes The notes/comments for the medication.
 * @property ?\Blackbaud\SKY\School\Components\AllergyRead[] $allergies The
 *   list of allergies this medication can treat.
 * @property ?\Blackbaud\SKY\School\Components\ConditionRead[] $conditions The
 *   list of conditions this medication can treat.
 *
 * @api
 */
class StudentMedicationRead extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "medication_type",
        "date_as_of",
        "date_until",
        "location",
        "dosage",
        "dispense",
        "notes",
        "allergies",
        "conditions",
    ];
}
