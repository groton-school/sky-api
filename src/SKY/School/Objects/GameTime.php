<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $date Date of the game or practice. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property string | null $start The time a game or practice starts
 * @property string | null $end The time a game or practice ends
 * @property string | null $duration The duration of a game or practice
 *
 * @api
 */
class GameTime extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["date","start","end","duration"];
}
