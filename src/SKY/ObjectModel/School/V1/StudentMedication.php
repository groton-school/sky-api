<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* An object for student medication information
*
* @property int $id
* @property IdDescriptorField $medication
* @property string|null $date_as_of
* @property string|null $date_until
@api
*/
class StudentMedication extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","medication","date_as_of","date_until"];
}
