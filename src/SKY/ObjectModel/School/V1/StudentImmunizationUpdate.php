<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student medication
*
* @property int $user_id
* @property StudentImmunization[] $immunizations
@api
*/
class StudentImmunizationUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","immunizations"];
}
