<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Athletic requirement
 *
 * @property string $athletic_type
 * @property string|null $athletic_date
 * @api
 */
class StudentAthleticRequirement extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["athletic_type","athletic_date"];
}
