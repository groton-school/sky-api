<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $schedule_set_id
* @property string|null $holiday_label
* @property string|null $day_label
* @property MasterScheduleBlock[]|null $blocks
@api
*/
class MasterScheduleSet extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["schedule_set_id","holiday_label","day_label","blocks"];
}
