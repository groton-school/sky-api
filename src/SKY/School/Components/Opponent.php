<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id Opponents team ID
 * @property ?string $name Opponents team name
 * @property ?string $score The final score of the game.
 * @property ?string $win_loss The outcome of the game.
 * @property ?string $opponent_score The opponents part of the score
 * @property ?string $team_score The teams part of the score
 *
 * @api
 */
class Opponent extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "score" => "string",
        "win_loss" => "string",
        "opponent_score" => "string",
        "team_score" => "string",
    ];
}
