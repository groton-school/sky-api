<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $schedule_set_id
 * @property string $holiday_label
 * @property string $day_label
 * @property \Blackbaud\SKY\School\Components\MasterScheduleBlock[] $blocks
 *
 * @api
 */
class MasterScheduleSet extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "schedule_set_id",
        "holiday_label",
        "day_label",
        "blocks",
    ];
}
