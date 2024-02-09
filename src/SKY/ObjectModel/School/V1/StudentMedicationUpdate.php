<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student medication
*
* @property string|null $date_as_of
* @property string|null $date_until
* @property string|null $location
* @property string|null $dosage
* @property int $despense_times_a_day
* @property string|null $dispense_frequency
* @property Days $dispense_days Days for medication
* @property int[]|null $conditions
* @property int[]|null $allergies
@api
*/
class StudentMedicationUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["date_as_of","date_until","location","dosage","despense_times_a_day","dispense_frequency","dispense_days","conditions","allergies"];
}
