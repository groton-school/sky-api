<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $WeekInCycle
 * @property ?int $DayInCycle
 * @property ?string $DayLabel
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetRotationDayMeeting[]
 *   $RotaionDayMeetingList
 *
 * @api
 */
class ScheduleSetRotationDay extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "WeekInCycle",
        "DayInCycle",
        "DayLabel",
        "RotaionDayMeetingList",
    ];
}
