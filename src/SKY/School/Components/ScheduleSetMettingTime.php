<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $PatternNum
 * @property int $DailyOrdinal
 * @property string $BeginTime
 * @property string $EndTime
 * @property bool $HasAttendance
 *
 * @api
 */
class ScheduleSetMettingTime extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "PatternNum",
        "DailyOrdinal",
        "BeginTime",
        "EndTime",
        "HasAttendance",
    ];
}
