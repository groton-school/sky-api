<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property ?string $date_as_of The date to begin the medication. Use format
 *   ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $date_until The date to end the medication. Use format
 *   ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $location The ID or description of the location of the
 *   medication.
 * @property ?string $dosage The dosage of the medication to dispense.
 * @property int $despense_times_a_day The times per day to dispense the
 *   medication
 * @property ?string $dispense_frequency The weekly frequency to dispense the
 *   medication. Allowed values: everyday, asneeded, specificdays.
 * @property \Blackbaud\SKY\School\Components\Days $dispense_days Days for
 *   medication
 * @property ?int[] $conditions The list of student condition IDs for the
 *   condition. If included, this list will replace the existing list of
 *   conditions on the medication.
 * @property ?int[] $allergies The list of student allergy IDs for the
 *   allergy. If included, this list will replace the existing list of allegies
 *   on the medication.
 *
 * @api
 */
class StudentMedicationUpdate extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date_as_of",
        "date_until",
        "location",
        "dosage",
        "despense_times_a_day",
        "dispense_frequency",
        "dispense_days",
        "conditions",
        "allergies",
    ];
}
