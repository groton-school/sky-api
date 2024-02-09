<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* An object for visa information
*
* @property string|null $number
* @property string|null $status
* @property string|null $type
* @property string|null $issue_date
* @property string|null $expire_date
@api
*/
class UserVisaAdd extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","status","type","issue_date","expire_date"];
}
