<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $id The ID of the sport level
 * @property ?string $name The name of the sport level
 * @property ?string $description A description of the sport level
 * @property ?string $gender Gender classification associated with this sport
 *   level ("M" or "F" et al)
 * @property ?string $level_of_play Indicates where this sport competes (e.g.
 *   varsity or JV)
 * @property ?int $sport_id ID of the sport
 * @property ?string $sport Name of the sport
 * @property ?int $season_id ID of the season during which the sport competes
 * @property ?string $season Name of the season during which the sport
 *   competes
 *
 * @api
 */
class SportsLevel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
        "description",
        "gender",
        "level_of_play",
        "sport_id",
        "sport",
        "season_id",
        "season",
    ];
}
