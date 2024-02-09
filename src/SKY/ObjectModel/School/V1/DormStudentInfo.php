<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $grad_year
@api
*/
class DormStudentInfo extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["grad_year"];
}
