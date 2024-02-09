<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $present
 * @property int $absence
 * @property int $tardy
 * @api
 */
class AttendanceTypes extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["present","absence","tardy"];
}
