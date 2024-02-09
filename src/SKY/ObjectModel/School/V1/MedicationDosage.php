<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $times_a_day
* @property string|null $frequency
* @property Days $days Days for medication
@api
*/
class MedicationDosage extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["times_a_day","frequency","days"];
}
