<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $WeekInCycle
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetRotationDay[]
 *   $WeekDayList
 *
 * @api
 */
class ScheduleSetRotation extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "WeekInCycle",
        "WeekDayList",
    ];
}
