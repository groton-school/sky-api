<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* List Model
*
* @property Row[]|null $rows
@api
*/
class _List extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["rows"];
}
