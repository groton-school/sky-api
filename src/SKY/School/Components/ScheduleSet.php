<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $schedule_set_id
 * @property string $title
 * @property bool $meeting_time
 * @property bool $rotation
 * @property string $begin_date
 * @property string $end_date
 *
 * @api
 */
class ScheduleSet extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "schedule_set_id",
        "title",
        "meeting_time",
        "rotation",
        "begin_date",
        "end_date",
    ];
}
