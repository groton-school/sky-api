<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student condition update
*
* @property string|null $date_as_of
* @property string|null $date_until
* @property string|null $notes
* @property MedicalSecurityRole[]|null $role_access
* @property int[]|null $medications
@api
*/
class StudentConditionUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["date_as_of","date_until","notes","role_access","medications"];
}
