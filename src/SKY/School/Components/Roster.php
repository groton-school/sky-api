<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The Team ID
 * @property \Blackbaud\SKY\School\Components\CoachCollection $coaches A
 *   Collection
 * @property \Blackbaud\SKY\School\Components\PlayerCollection $players A
 *   Collection
 *
 * @api
 */
class Roster extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "coaches",
        "players",
    ];
}
