<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The Team ID
 * @property \Blackbaud\SKY\School\Components\CoachCollection $coaches A
 *   Collection
 * @property \Blackbaud\SKY\School\Components\PlayerCollection $players A
 *   Collection
 *
 * @api
 */
class Roster extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "coaches" => "\Blackbaud\SKY\School\Components\CoachCollection",
        "players" => "\Blackbaud\SKY\School\Components\PlayerCollection",
    ];
}
