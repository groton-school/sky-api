<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $id
* @property string|null $name
* @property string|null $description
* @property string|null $gender
* @property string|null $level_of_play
* @property int|null $sport_id
* @property string|null $sport
* @property int|null $season_id
* @property string|null $season
@api
*/
class SportsLevel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","description","gender","level_of_play","sport_id","sport","season_id","season"];
}
