<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student medical condition
*
* @property int $user_id
* @property string $condition
* @property string $date_as_of
* @property string|null $date_until
* @property string|null $notes
* @property StudentAccessRole[]|null $access_roles
* @property int[]|null $student_medications
@api
*/
class StudentMedicalCondition extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","condition","date_as_of","date_until","notes","access_roles","student_medications"];
}
