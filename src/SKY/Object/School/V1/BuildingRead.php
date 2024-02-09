<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $building_id
 * @property string|null $building_name
 * @property _string|null $building_types
 * @property BuildingRoomRead[]|null $rooms
 * @api
 */
class BuildingRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["building_id","building_name","building_types","rooms"];
}
