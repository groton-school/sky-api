<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $opponent_id ID for the opponent
 * @property ?string $score Score for the opponent
 * @property ?string $win_loss Set to "Win", "Loss" or "Tie" based on the home
 *   team
 * @property ?string $score_versus Set the score of the opponent when
 *   ScheduleType = 0
 *
 * @api
 */
class ResultCreateOpponent extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "opponent_id" => "int",
        "score" => "string",
        "win_loss" => "string",
        "score_versus" => "string",
    ];
}
