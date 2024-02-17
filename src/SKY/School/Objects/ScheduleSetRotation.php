<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $WeekInCycle
 * @property \Blackbaud\SKY\School\Objects\ScheduleSetRotationDay[]
 *   $WeekDayList
 *
 * @api
 */
class ScheduleSetRotation extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "WeekInCycle",
        "WeekDayList",
    ];
}
