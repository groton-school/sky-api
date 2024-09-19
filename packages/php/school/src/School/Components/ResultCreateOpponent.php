<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $opponent_id For ```schedule\_type=0```: the id of opponent.
 *
 *  For ```schedule\_type=1```: Use -1 for the home team�s entry.Use the id
 *   of the opponent for the opponent entries.
 * @property ?string $score For ```schedule\_type=0```: the score of the home
 *   team
 *  For ```schedule\_type=1```: the place(�1st", �2nd", etc.) or team
 *   point total of the opponent
 * @property ?string $win_loss For ```schedule\_type=0```: include value for
 *   each opponent.
 *  For ```schedule\_type=1```: include value for home team only.Not
 *   used/omitted for opponents.
 * @property ?string $score_versus For ```schedule\_type=0```: the score of
 *   the opponent
 *  For ```schedule\_type=1```: not used/omitted
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
