<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $PatternNum 
 * @property bool | null $Sun 
 * @property bool | null $Mon 
 * @property bool | null $Tue 
 * @property bool | null $Wed 
 * @property bool | null $Thu 
 * @property bool | null $Fri 
 * @property bool | null $Sat 
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\ScheduleSetMettingTime[] | null
 *   $MeetingTimeList 
 * @property bool | null $HasAttendance 
 *
 * @api
 */
class ScheduleSetMettingPattern extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["PatternNum","Sun","Mon","Tue","Wed","Thu","Fri","Sat","MeetingTimeList","HasAttendance"];
}
