<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * FuzzyDate
 *
 * @property int $year The year.
 * @property int $month The month.
 * @property int $day The day.
 *
 * @api
 */
class FuzzyDate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "year" => "int",
        "month" => "int",
        "day" => "int",
    ];
}
