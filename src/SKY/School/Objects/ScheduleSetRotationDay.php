<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $WeekInCycle 
 * @property int | null $DayInCycle 
 * @property string | null $DayLabel 
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\ScheduleSetRotationDayMeeting[]
 *   | null $RotaionDayMeetingList 
 *
 * @api
 */
class ScheduleSetRotationDay extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["WeekInCycle","DayInCycle","DayLabel","RotaionDayMeetingList"];
}
