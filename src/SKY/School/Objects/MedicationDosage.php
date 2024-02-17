<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $times_a_day The frequency per day of the medication
 * @property string $frequency The frequency of the medication Daily/Specific
 *   days/ Custom
 * @property \Blackbaud\SKY\School\Objects\Days $days Days for medication
 *
 * @api
 */
class MedicationDosage extends BaseObject
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
