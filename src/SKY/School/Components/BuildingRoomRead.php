<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $room_id Identifier for the room
 * @property string $room_number Room number
 * @property string $name Room name
 * @property string $code Room code
 * @property string $capacity Room capacity
 * @property string $room_type Denotes how the room is used
 * @property int $room_type_id Identifier for the room type
 *
 * @api
 */
class BuildingRoomRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "room_id",
        "room_number",
        "name",
        "code",
        "capacity",
        "room_type",
        "room_type_id",
    ];
}
