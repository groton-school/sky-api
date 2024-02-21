<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $WeekInCycle
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetRotationDay[]
 *   $WeekDayList
 *
 * @api
 */
class ScheduleSetRotation extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "WeekInCycle" => "int",
        "WeekDayList" => "\Blackbaud\SKY\School\Components\ScheduleSetRotationDay[]",
    ];
}
