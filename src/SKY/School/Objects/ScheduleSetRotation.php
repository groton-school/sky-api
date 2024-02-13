<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $WeekInCycle 
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\ScheduleSetRotationDay[] | null
 *   $WeekDayList 
 *
 * @api
 */
class ScheduleSetRotation extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["WeekInCycle","WeekDayList"];
}
