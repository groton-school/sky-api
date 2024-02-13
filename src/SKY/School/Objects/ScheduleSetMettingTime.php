<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $PatternNum 
 * @property int | null $DailyOrdinal 
 * @property string | null $BeginTime 
 * @property string | null $EndTime 
 * @property bool | null $HasAttendance 
 *
 * @api
 */
class ScheduleSetMettingTime extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["PatternNum","DailyOrdinal","BeginTime","EndTime","HasAttendance"];
}
