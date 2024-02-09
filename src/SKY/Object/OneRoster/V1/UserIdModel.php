<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $type
 * @property string|null $identifier
 * @api
 */
class UserIdModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["type","identifier"];
}
