<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* An object for in-state resident information
*
* @property string|null $resident
* @property string|null $county
* @property string|null $from_date
@api
*/
class UserInState extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["resident","county","from_date"];
}
