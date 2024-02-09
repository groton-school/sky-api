<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student medical condition
*
* @property int $id
* @property IdDescriptorField $condition
* @property string|null $date_as_of
* @property string|null $date_until
* @property string|null $notes
* @property StudentMedication[]|null $student_medications
@api
*/
class StudentConditionView extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","condition","date_as_of","date_until","notes","student_medications"];
}
