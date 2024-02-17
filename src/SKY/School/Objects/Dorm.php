<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $available_spots
 * @property int $building_capacity
 * @property int $building_id
 * @property string $building_name
 * @property int $building_enrollment
 * @property int $offering_type
 * @property \Blackbaud\SKY\School\Objects\DormLeader[] $leaders
 * @property \Blackbaud\SKY\School\Objects\Room[] $Rooms
 * @property int $section_id
 *
 * @api
 */
class Dorm extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "available_spots",
        "building_capacity",
        "building_id",
        "building_name",
        "building_enrollment",
        "offering_type",
        "leaders",
        "Rooms",
        "section_id",
    ];
}
