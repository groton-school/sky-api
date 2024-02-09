<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $room_id
 * @property string|null $room_number
 * @property string|null $name
 * @property string|null $code
 * @property string|null $capacity
 * @property string|null $room_type
 * @property int|null $room_type_id
 * @api
 */
class BuildingRoomRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["room_id","room_number","name","code","capacity","room_type","room_type_id"];
}
