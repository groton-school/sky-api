<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property string|null $name
 * @property string|null $score
 * @property string|null $win_loss
 * @property string|null $opponent_score
 * @property string|null $team_score
 * @api
 */
class Opponent extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","score","win_loss","opponent_score","team_score"];
}
