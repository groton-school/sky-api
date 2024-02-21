<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $WeekInCycle
 * @property ?int $DayInCycle
 * @property ?int $DailyOrdinal
 * @property ?int $BlockId
 * @property ?string $BlockName
 *
 * @api
 */
class ScheduleSetRotationDayMeeting extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "WeekInCycle",
        "DayInCycle",
        "DailyOrdinal",
        "BlockId",
        "BlockName",
    ];
}
