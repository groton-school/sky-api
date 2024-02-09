<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $PatternNum
* @property int|null $DailyOrdinal
* @property string|null $BeginTime
* @property string|null $EndTime
* @property bool|null $HasAttendance
@api
*/
class ScheduleSetMettingTime extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["PatternNum","DailyOrdinal","BeginTime","EndTime","HasAttendance"];
}
