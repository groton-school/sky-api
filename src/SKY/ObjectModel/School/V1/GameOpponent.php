<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* A game opponent
*
* @property int $opponent_id
@api
*/
class GameOpponent extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["opponent_id"];
}
