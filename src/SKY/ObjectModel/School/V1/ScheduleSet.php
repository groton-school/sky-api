<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $schedule_set_id
* @property string|null $title
* @property bool $meeting_time
* @property bool $rotation
* @property string|null $begin_date
* @property string|null $end_date
@api
*/
class ScheduleSet extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["schedule_set_id","title","meeting_time","rotation","begin_date","end_date"];
}
