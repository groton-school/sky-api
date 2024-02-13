<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $calendar_day 
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\MasterScheduleSet[] |
 *   null $schedule_sets 
 *
 * @api
 */
class MasterScheduleDay extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["calendar_day","schedule_sets"];
}
