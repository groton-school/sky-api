<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $WeekInCycle
 * @property int $DayInCycle
 * @property string $DayLabel
 * @property \Blackbaud\SKY\School\Objects\ScheduleSetRotationDayMeeting[]
 *   $RotaionDayMeetingList
 *
 * @api
 */
class ScheduleSetRotationDay extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "WeekInCycle",
        "DayInCycle",
        "DayLabel",
        "RotaionDayMeetingList",
    ];
}
