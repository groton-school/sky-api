<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * A game opponent
 *
 * @property int $opponent_id
 * @api
 */
class GameOpponent extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["opponent_id"];
}
