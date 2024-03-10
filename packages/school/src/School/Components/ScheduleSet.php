<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $schedule_set_id
 * @property ?string $title
 * @property bool $meeting_time
 * @property bool $rotation
 * @property ?string $begin_date
 * @property ?string $end_date
 *
 * @api
 */
class ScheduleSet extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "schedule_set_id" => "int",
        "title" => "string",
        "meeting_time" => "bool",
        "rotation" => "bool",
        "begin_date" => "string",
        "end_date" => "string",
    ];
}
