<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $PatternNum
 * @property bool $Sun
 * @property bool $Mon
 * @property bool $Tue
 * @property bool $Wed
 * @property bool $Thu
 * @property bool $Fri
 * @property bool $Sat
 * @property \Blackbaud\SKY\School\Objects\ScheduleSetMettingTime[]
 *   $MeetingTimeList
 * @property bool $HasAttendance
 *
 * @api
 */
class ScheduleSetMettingPattern extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "PatternNum",
        "Sun",
        "Mon",
        "Tue",
        "Wed",
        "Thu",
        "Fri",
        "Sat",
        "MeetingTimeList",
        "HasAttendance",
    ];
}
