<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $calendar_day
 * @property ?\Blackbaud\SKY\School\Components\MasterScheduleSet[]
 *   $schedule_sets
 *
 * @api
 */
class MasterScheduleDay extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "calendar_day",
        "schedule_sets",
    ];
}
