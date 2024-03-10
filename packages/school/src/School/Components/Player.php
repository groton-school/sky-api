<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Player
 *
 * @property int $id ID of the player
 * @property ?string $accolades A description of a players awards and
 *   achievments
 * @property ?string $first_name Players first name
 * @property ?string $height Height
 * @property ?string $hometown Hometown
 * @property ?int $jersey Jersey number
 * @property ?string $last_name Players last name
 * @property ?string $position Player's position
 * @property bool $returning_letter Returning letter
 * @property bool $team_captain returns true if the player is a team captian
 * @property ?string $weight Weight
 * @property ?string $preferred_name Preferred Name
 *
 * @api
 */
class Player extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "accolades" => "string",
        "first_name" => "string",
        "height" => "string",
        "hometown" => "string",
        "jersey" => "int",
        "last_name" => "string",
        "position" => "string",
        "returning_letter" => "bool",
        "team_captain" => "bool",
        "weight" => "string",
        "preferred_name" => "string",
    ];
}
