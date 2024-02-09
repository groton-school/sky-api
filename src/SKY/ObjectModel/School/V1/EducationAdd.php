<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* EducationAdd Model
*
* @property string $school
* @property string|null $degree
* @property string|null $major
* @property string|null $field
* @property int|null $grad_year
* @property int|null $sort_order
@api
*/
class EducationAdd extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["school","degree","major","field","grad_year","sort_order"];
}
