<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * MonthDay
 *
 * @property int $month The month.
 * @property int $day The day.
 *
 * @api
 */
class MonthDay extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "month" => "int",
        "day" => "int",
    ];
}
