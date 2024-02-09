<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * An object for mailbox information
 *
 * @property string|null $number
 * @property string|null $combo
 * @api
 */
class UserMailbox extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","combo"];
}
