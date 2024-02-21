<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $date Date of the game or practice. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property ?string $start The time a game or practice starts
 * @property ?string $end The time a game or practice ends
 * @property ?string $duration The duration of a game or practice
 *
 * @api
 */
class GameTime extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date",
        "start",
        "end",
        "duration",
    ];
}
