<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $WeekInCycle 
 * @property int | null $DayInCycle 
 * @property int | null $DailyOrdinal 
 * @property int | null $BlockId 
 * @property string | null $BlockName 
 *
 * @api
 */
class ScheduleSetRotationDayMeeting extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["WeekInCycle","DayInCycle","DailyOrdinal","BlockId","BlockName"];
}
