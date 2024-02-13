<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $schedule_set_id 
 * @property string | null $holiday_label 
 * @property string | null $day_label 
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\MasterScheduleBlock[] |
 *   null $blocks 
 *
 * @api
 */
class MasterScheduleSet extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["schedule_set_id","holiday_label","day_label","blocks"];
}
