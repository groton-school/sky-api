<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $building_id
* @property string|null $capacity
* @property string|null $name
* @property int|null $room_enrollment
* @property int|null $room_id
* @property string|null $room_number
* @property Resident[]|null $residents
@api
*/
class Room extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["building_id","capacity","name","room_enrollment","room_id","room_number","residents"];
}
