<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $user_id
* @property string|null $first_name
* @property string|null $last_name
* @property string|null $preferred_name
* @property DegreeOutputModel[]|null $student_degrees
@api
*/
class UserDegreeOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","preferred_name","student_degrees"];
}
