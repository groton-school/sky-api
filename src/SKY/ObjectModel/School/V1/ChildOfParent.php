<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* UserRead Model
*
* @property int|null $id
* @property bool|null $student_is_active
* @property string|null $current_grade
* @property string|null $grad_year
* @property string|null $email
* @property string|null $first_name
* @property string|null $last_name
* @property string|null $middle_name
* @property string|null $nick_name
* @property string|null $preferred_name
* @property string|null $prefix
* @property string|null $suffix
@api
*/
class ChildOfParent extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","student_is_active","current_grade","grad_year","email","first_name","last_name","middle_name","nick_name","preferred_name","prefix","suffix"];
}
