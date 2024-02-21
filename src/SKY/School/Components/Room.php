<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class Room extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "building_id" => "int",
        "capacity" => "string",
        "name" => "string",
        "room_enrollment" => "int",
        "room_id" => "int",
        "room_number" => "string",
        "residents" => "\Blackbaud\SKY\School\Components\Resident[]",
    ];
}
