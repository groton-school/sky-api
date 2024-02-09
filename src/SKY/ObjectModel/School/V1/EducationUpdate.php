<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* EducationUpdate Model
*
* @property string|null $school
* @property string|null $degree
* @property string|null $major
* @property string|null $field
* @property string|null $grad_year
* @property string|null $sort_order
@api
*/
class EducationUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["school","degree","major","field","grad_year","sort_order"];
}
