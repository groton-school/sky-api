<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $na
 * @property int $full_day
 * @property int $half_day
 * @api
 */
class ExcuseDurationTypes extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["na","full_day","half_day"];
}
