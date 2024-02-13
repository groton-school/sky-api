<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $building_id ID of the building
 * @property string | null $building_name Building Name
 * @property string[] | null $building_types Building group types
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\BuildingRoomRead[] |
 *   null $rooms Collection of rooms within the building
 *
 * @api
 */
class BuildingRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["building_id","building_name","building_types","rooms"];
}
