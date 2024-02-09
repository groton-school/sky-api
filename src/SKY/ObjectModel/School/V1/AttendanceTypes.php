<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $present
* @property int $absence
* @property int $tardy
@api
*/
class AttendanceTypes extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["present","absence","tardy"];
}
