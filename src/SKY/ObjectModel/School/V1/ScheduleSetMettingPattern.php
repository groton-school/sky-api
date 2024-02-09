<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $PatternNum
* @property bool|null $Sun
* @property bool|null $Mon
* @property bool|null $Tue
* @property bool|null $Wed
* @property bool|null $Thu
* @property bool|null $Fri
* @property bool|null $Sat
* @property ScheduleSetMettingTime[]|null $MeetingTimeList
* @property bool|null $HasAttendance
@api
*/
class ScheduleSetMettingPattern extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["PatternNum","Sun","Mon","Tue","Wed","Thu","Fri","Sat","MeetingTimeList","HasAttendance"];
}
