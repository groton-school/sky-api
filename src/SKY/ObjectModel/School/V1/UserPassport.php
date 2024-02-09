<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* An object for passport information
*
* @property string|null $number
* @property string|null $expire_date
@api
*/
class UserPassport extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","expire_date"];
}
