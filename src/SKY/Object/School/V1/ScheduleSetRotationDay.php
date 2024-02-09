<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $WeekInCycle
 * @property int|null $DayInCycle
 * @property string|null $DayLabel
 * @property ScheduleSetRotationDayMeeting[]|null $RotaionDayMeetingList
 * @api
 */
class ScheduleSetRotationDay extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["WeekInCycle","DayInCycle","DayLabel","RotaionDayMeetingList"];
}
