<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* FacultyEmploymentRead model
*
* @property int|null $user_id
* @property string|null $first_name
* @property string|null $last_name
* @property string|null $date_appointed
* @property string|null $date_departed
* @property string|null $school_levels
* @property string|null $employee_roles
* @property string|null $departments
* @property string|null $grade_levels
* @property string|null $main_sports
@api
*/
class FacultyEmploymentRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","date_appointed","date_departed","school_levels","employee_roles","departments","grade_levels","main_sports"];
}
