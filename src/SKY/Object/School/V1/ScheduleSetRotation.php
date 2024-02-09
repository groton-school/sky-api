<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $WeekInCycle
 * @property ScheduleSetRotationDay[]|null $WeekDayList
 * @api
 */
class ScheduleSetRotation extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["WeekInCycle","WeekDayList"];
}
