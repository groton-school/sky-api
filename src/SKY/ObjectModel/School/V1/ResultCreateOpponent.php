<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $opponent_id
* @property string|null $score
* @property string|null $win_loss
* @property string|null $score_versus
@api
*/
class ResultCreateOpponent extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["opponent_id","score","win_loss","score_versus"];
}
