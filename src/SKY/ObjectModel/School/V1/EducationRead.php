<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* EducationRead Model
*
* @property int $id
* @property string|null $degree
* @property string|null $field
* @property string|null $grad_year
* @property string|null $major
* @property string|null $school
* @property int|null $sort_order
@api
*/
class EducationRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","degree","field","grad_year","major","school","sort_order"];
}
