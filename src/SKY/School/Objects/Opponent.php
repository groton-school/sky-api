<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id Opponents team ID
 * @property string $name Opponents team name
 * @property string $score The final score of the game.
 * @property string $win_loss The outcome of the game.
 * @property string $opponent_score The opponents part of the score
 * @property string $team_score The teams part of the score
 *
 * @api
 */
class Opponent extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "name",
        "score",
        "win_loss",
        "opponent_score",
        "team_score",
    ];
}
