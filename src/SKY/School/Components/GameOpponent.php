<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A game opponent
 *
 * @property int $opponent_id the opponent id
 *
 * @api
 */
class GameOpponent extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "opponent_id" => "int",
    ];
}
