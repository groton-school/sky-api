<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* RaceAdd Model
*
* @property string|null $race_type
@api
*/
class UserAddRace extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["race_type"];
}
