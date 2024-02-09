<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property bool $value
 * @api
 */
class PostResponse extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["value"];
}
