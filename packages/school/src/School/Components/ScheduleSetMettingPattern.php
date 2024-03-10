<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $PatternNum
 * @property ?bool $Sun
 * @property ?bool $Mon
 * @property ?bool $Tue
 * @property ?bool $Wed
 * @property ?bool $Thu
 * @property ?bool $Fri
 * @property ?bool $Sat
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetMettingTime[]
 *   $MeetingTimeList
 * @property ?bool $HasAttendance
 *
 * @api
 */
class ScheduleSetMettingPattern extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "PatternNum" => "int",
        "Sun" => "bool",
        "Mon" => "bool",
        "Tue" => "bool",
        "Wed" => "bool",
        "Thu" => "bool",
        "Fri" => "bool",
        "Sat" => "bool",
        "MeetingTimeList" => "\Blackbaud\SKY\School\Components\ScheduleSetMettingTime[]",
        "HasAttendance" => "bool",
    ];
}
