<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Player
 *
 * @property int $id ID of the player
 * @property string $accolades A description of a players awards and
 *   achievments
 * @property string $first_name Players first name
 * @property string $height Height
 * @property string $hometown Hometown
 * @property int $jersey Jersey number
 * @property string $last_name Players last name
 * @property string $position Player's position
 * @property bool $returning_letter Returning letter
 * @property bool $team_captain returns true if the player is a team captian
 * @property string $weight Weight
 * @property string $preferred_name Preferred Name
 *
 * @api
 */
class Player extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "accolades",
        "first_name",
        "height",
        "hometown",
        "jersey",
        "last_name",
        "position",
        "returning_letter",
        "team_captain",
        "weight",
        "preferred_name",
    ];
}
