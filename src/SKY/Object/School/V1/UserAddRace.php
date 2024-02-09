<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * RaceAdd Model
 *
 * @property string|null $race_type
 * @api
 */
class UserAddRace extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["race_type"];
}
