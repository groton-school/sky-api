<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id Opponents team ID
 * @property string | null $name Opponents team name
 * @property string | null $score The final score of the game.
 * @property string | null $win_loss The outcome of the game.
 * @property string | null $opponent_score The opponents part of the score
 * @property string | null $team_score The teams part of the score
 *
 * @api
 */
class Opponent extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","score","win_loss","opponent_score","team_score"];
}
