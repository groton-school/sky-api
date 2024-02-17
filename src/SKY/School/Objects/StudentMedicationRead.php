<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $id The ID of student medication
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $medication_type
 * @property string $date_as_of The date the allergy or condition began. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property string $date_until The date the allergy or condition ended. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $location
 * @property string $dosage The dosage of medication
 * @property \Blackbaud\SKY\School\Objects\MedicationDosage $dispense
 * @property string $notes The notes/comments for the medication.
 * @property \Blackbaud\SKY\School\Objects\AllergyRead[] $allergies The list
 *   of allergies this medication can treat.
 * @property \Blackbaud\SKY\School\Objects\ConditionRead[] $conditions The
 *   list of conditions this medication can treat.
 *
 * @api
 */
class StudentMedicationRead extends BaseObject
{
    /**
     * @var string[] fields
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
