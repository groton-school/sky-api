<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $na Not Applicable
 * @property int $full_day Individual was excused for the full day
 * @property int $half_day Individual was excused for a half day
 *
 * @api
 */
class ExcuseDurationTypes extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "na" => "int",
        "full_day" => "int",
        "half_day" => "int",
    ];
}
