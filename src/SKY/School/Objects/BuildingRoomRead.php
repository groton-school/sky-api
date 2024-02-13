<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $room_id Identifier for the room
 * @property string | null $room_number Room number
 * @property string | null $name Room name
 * @property string | null $code Room code
 * @property string | null $capacity Room capacity
 * @property string | null $room_type Denotes how the room is used
 * @property int | null $room_type_id Identifier for the room type
 *
 * @api
 */
class BuildingRoomRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["room_id","room_number","name","code","capacity","room_type","room_type_id"];
}
