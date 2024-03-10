<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $calendar_day
 * @property ?\Blackbaud\SKY\School\Components\MasterScheduleSet[]
 *   $schedule_sets
 *
 * @api
 */
class MasterScheduleDay extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "calendar_day" => "string",
        "schedule_sets" => "\Blackbaud\SKY\School\Components\MasterScheduleSet[]",
    ];
}
