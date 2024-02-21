<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $transportation_id ID of the transportation item to be used
 * @property ?bool $full_day Toggle if transportation should be booked for the
 *   full day
 * @property ?string $begin_use Start date/time for transportation use
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $end_use End date/time for transportation use
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 *
 * @api
 */
class GameTransportation extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "transportation_id" => "int",
        "full_day" => "bool",
        "begin_use" => "string",
        "end_use" => "string",
    ];
}
