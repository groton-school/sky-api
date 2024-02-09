<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Determines the frequency the medication is dispensed.
 *
 * @property int $times_a_day
 * @property string $frequency
 * @property Days $days Days for medication
 * @api
 */
class MedicationDosageCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["times_a_day","frequency","days"];
}
