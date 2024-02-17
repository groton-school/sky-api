<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $opponent_id ID for the opponent
 * @property string $score Score for the opponent
 * @property string $win_loss Set to "Win", "Loss" or "Tie" based on the home
 *   team
 * @property string $score_versus Set the score of the opponent when
 *   ScheduleType = 0
 *
 * @api
 */
class ResultCreateOpponent extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "opponent_id",
        "score",
        "win_loss",
        "score_versus",
    ];
}
