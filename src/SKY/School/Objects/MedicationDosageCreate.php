<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Determines the frequency the medication is dispensed.
 *
 * @property int $times_a_day The times per day to dispense the medication
 * @property string $frequency The weekly frequency to dispense the
 *   medication. Allowed values: every day, as needed, specific days.
 * @property \Blackbaud\SKY\School\Objects\Days $days Days for medication
 *
 * @api
 */
class MedicationDosageCreate extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "times_a_day",
        "frequency",
        "days",
    ];
}
