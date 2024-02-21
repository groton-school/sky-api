<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $available_spots
 * @property ?int $building_capacity
 * @property ?int $building_id
 * @property ?string $building_name
 * @property ?int $building_enrollment
 * @property ?int $offering_type
 * @property ?\Blackbaud\SKY\School\Components\DormLeader[] $leaders
 * @property ?\Blackbaud\SKY\School\Components\Room[] $Rooms
 * @property ?int $section_id
 *
 * @api
 */
class Dorm extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "available_spots" => "int",
        "building_capacity" => "int",
        "building_id" => "int",
        "building_name" => "string",
        "building_enrollment" => "int",
        "offering_type" => "int",
        "leaders" => "\Blackbaud\SKY\School\Components\DormLeader[]",
        "Rooms" => "\Blackbaud\SKY\School\Components\Room[]",
        "section_id" => "int",
    ];
}
