<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $date
* @property string|null $start
* @property string|null $end
* @property string|null $duration
@api
*/
class GameTime extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["date","start","end","duration"];
}
