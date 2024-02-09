<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $schedule_set
 * @property int|null $schedule_set_id
 * @property int $week
 * @property int $day
 * @property string|null $begin_time
 * @property string|null $end_time
 * @property bool $sun
 * @property bool $mon
 * @property bool $tue
 * @property bool $wed
 * @property bool $thu
 * @property bool $fri
 * @property bool $sat
 * @property string|null $room_full_name
 * @property bool $canceled
 * @api
 */
class Cycle extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["schedule_set","schedule_set_id","week","day","begin_time","end_time","sun","mon","tue","wed","thu","fri","sat","room_full_name","canceled"];
}
