<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* An object for locker information
*
* @property string|null $number
* @property string|null $combo
@api
*/
class UserLocker extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","combo"];
}
