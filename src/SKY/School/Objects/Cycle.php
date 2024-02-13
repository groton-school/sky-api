<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $schedule_set Name of the schedule rotation for the
 *   cycle
 * @property int | null $schedule_set_id Id of the schedule rotation for the
 *   cycle
 * @property int $week Week in the schedule rotation for the cycle
 * @property int $day Day in the schedule rotation for the cycle
 * @property string | null $begin_time Start time of the cycle
 * @property string | null $end_time End time of the cycle
 * @property bool $sun Flag to indicate if the section meets on Sundays
 * @property bool $mon Flag to indicate if the section meets on Mondays
 * @property bool $tue Flag to indicate if the section meets on Tuesdays
 * @property bool $wed Flag to indicate if the section meets on Wednesdays
 * @property bool $thu Flag to indicate if the section meets on Thursdays
 * @property bool $fri Flag to indicate if the section meets on Fridays
 * @property bool $sat Flag to indicate if the section meets on Saturdays
 * @property string | null $room_full_name Name of the room where this
 *   particular cycle meets
 * @property bool $canceled Flag to indicate if the cycle has been canceled
 *
 * @api
 */
class Cycle extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["schedule_set","schedule_set_id","week","day","begin_time","end_time","sun","mon","tue","wed","thu","fri","sat","room_full_name","canceled"];
}
