<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $building_id ID of the building
 * @property ?string $building_name Building Name
 * @property null|"Academics"|"Activities"|"Advisory"|"ResidenceLife"|"Athletics"|"Events"[]
 *   $building_types Building group types
 * @property ?\Blackbaud\SKY\School\Components\BuildingRoomRead[] $rooms
 *   Collection of rooms within the building
 *
 * @api
 */
class BuildingRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "building_id" => "int",
        "building_name" => "string",
        "building_types" => "array",
        "rooms" => "\Blackbaud\SKY\School\Components\BuildingRoomRead[]",
    ];
}
