<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* RaceRead Model
*
* @property int $race_type_id
* @property string|null $description
* @property int $user_race_id
* @property int $user_id
@api
*/
class RaceRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["race_type_id","description","user_race_id","user_id"];
}
