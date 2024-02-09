<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $transportation_id
* @property bool|null $full_day
* @property string|null $begin_use
* @property string|null $end_use
@api
*/
class GameTransportation extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["transportation_id","full_day","begin_use","end_use"];
}
