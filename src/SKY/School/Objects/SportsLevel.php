<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id The ID of the sport level
 * @property string | null $name The name of the sport level
 * @property string | null $description A description of the sport level
 * @property string | null $gender Gender classification associated with this
 *   sport level ("M" or "F" et al)
 * @property string | null $level_of_play Indicates where this sport competes
 *   (e.g. varsity or JV)
 * @property int | null $sport_id ID of the sport
 * @property string | null $sport Name of the sport
 * @property int | null $season_id ID of the season during which the sport
 *   competes
 * @property string | null $season Name of the season during which the sport
 *   competes
 *
 * @api
 */
class SportsLevel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","description","gender","level_of_play","sport_id","sport","season_id","season"];
}
