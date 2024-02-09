<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $WeekInCycle
* @property ScheduleSetRotationDay[]|null $WeekDayList
@api
*/
class ScheduleSetRotation extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["WeekInCycle","WeekDayList"];
}
