<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* An object for mailbox information
*
* @property string|null $number
* @property string|null $combo
@api
*/
class UserMailbox extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","combo"];
}
