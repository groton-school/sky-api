<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * HourMinute
 *
 * @property int $hour The hour.
 * @property int $minute The minute.
 *
 * @api
 */
class HourMinute extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "hour" => "int",
        "minute" => "int",
    ];
}
