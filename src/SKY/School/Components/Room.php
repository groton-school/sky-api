<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $building_id ///
 * @property ?string $capacity
 * @property ?string $name
 * @property ?int $room_enrollment
 * @property ?int $room_id
 * @property ?string $room_number
 * @property ?\Blackbaud\SKY\School\Components\Resident[] $residents
 *
 * @api
 */
class Room extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "building_id",
        "capacity",
        "name",
        "room_enrollment",
        "room_id",
        "room_number",
        "residents",
    ];
}
