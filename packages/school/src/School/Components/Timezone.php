<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Timezone model
 *
 * @property ?string $timezone_name The timezone the school is set to
 * @property ?bool $is_daylight_savings_time Gets or sets the daylight savings
 *   time flag
 * @property ?string $utc_offset The UTC offset
 *
 * @api
 */
class Timezone extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "timezone_name" => "string",
        "is_daylight_savings_time" => "bool",
        "utc_offset" => "string",
    ];
}
