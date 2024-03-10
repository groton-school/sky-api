<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $PatternNum
 * @property ?int $DailyOrdinal
 * @property ?string $BeginTime
 * @property ?string $EndTime
 * @property ?bool $HasAttendance
 *
 * @api
 */
class ScheduleSetMettingTime extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "PatternNum" => "int",
        "DailyOrdinal" => "int",
        "BeginTime" => "string",
        "EndTime" => "string",
        "HasAttendance" => "bool",
    ];
}
