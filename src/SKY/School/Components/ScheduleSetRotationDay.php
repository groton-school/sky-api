<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $WeekInCycle
 * @property ?int $DayInCycle
 * @property ?string $DayLabel
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetRotationDayMeeting[]
 *   $RotaionDayMeetingList
 *
 * @api
 */
class ScheduleSetRotationDay extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "WeekInCycle" => "int",
        "DayInCycle" => "int",
        "DayLabel" => "string",
        "RotaionDayMeetingList" => "\Blackbaud\SKY\School\Components\ScheduleSetRotationDayMeeting[]",
    ];
}
