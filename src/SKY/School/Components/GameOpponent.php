<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * A game opponent
 *
 * @property int $opponent_id the opponent id
 *
 * @api
 */
class GameOpponent extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "opponent_id",
    ];
}
