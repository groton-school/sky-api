<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $building_id ID of the building
 * @property ?string $building_name Building Name
 * @property ?string[] $building_types Building group types
 * @property ?\Blackbaud\SKY\School\Components\BuildingRoomRead[] $rooms
 *   Collection of rooms within the building
 *
 * @api
 */
class BuildingRead extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "building_id",
        "building_name",
        "building_types",
        "rooms",
    ];
}
