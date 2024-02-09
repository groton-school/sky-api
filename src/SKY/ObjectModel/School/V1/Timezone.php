<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Timezone model
*
* @property string|null $timezone_name
* @property bool|null $is_daylight_savings_time
* @property string|null $utc_offset
@api
*/
class Timezone extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["timezone_name","is_daylight_savings_time","utc_offset"];
}
