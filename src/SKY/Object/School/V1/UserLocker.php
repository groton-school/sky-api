<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * An object for locker information
 *
 * @property string|null $number
 * @property string|null $combo
 * @api
 */
class UserLocker extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","combo"];
}
