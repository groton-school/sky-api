<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $calendar_day
* @property MasterScheduleSet[]|null $schedule_sets
@api
*/
class MasterScheduleDay extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["calendar_day","schedule_sets"];
}
