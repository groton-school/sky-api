<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $WeekInCycle
 * @property ?int $DayInCycle
 * @property ?int $DailyOrdinal
 * @property ?int $BlockId
 * @property ?string $BlockName
 *
 * @api
 */
class ScheduleSetRotationDayMeeting extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "WeekInCycle" => "int",
        "DayInCycle" => "int",
        "DailyOrdinal" => "int",
        "BlockId" => "int",
        "BlockName" => "string",
    ];
}
