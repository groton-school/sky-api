<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Team ID
 * @property \Blackbaud\SKY\School\Objects\CoachCollection $coaches A
 *   Collection
 * @property \Blackbaud\SKY\School\Objects\PlayerCollection $players A
 *   Collection
 *
 * @api
 */
class Roster extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "coaches",
        "players",
    ];
}
