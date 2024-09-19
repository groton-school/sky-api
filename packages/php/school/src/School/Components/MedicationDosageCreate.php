<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Determines the frequency the medication is dispensed.
 *
 * @property int $times_a_day The times per day to dispense the medication
 * @property string $frequency The weekly frequency to dispense the
 *   medication. Allowed values: every day, as needed, specific days.
 * @property \Blackbaud\SKY\School\Components\Days $days Days for medication
 *
 * @api
 */
class MedicationDosageCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "times_a_day" => "int",
        "frequency" => "string",
        "days" => "\Blackbaud\SKY\School\Components\Days",
    ];
}
