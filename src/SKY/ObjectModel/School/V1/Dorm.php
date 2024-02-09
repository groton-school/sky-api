<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $available_spots
* @property int|null $building_capacity
* @property int|null $building_id
* @property string|null $building_name
* @property int|null $building_enrollment
* @property int|null $offering_type
* @property DormLeader[]|null $leaders
* @property Room[]|null $Rooms
* @property int|null $section_id
@api
*/
class Dorm extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["available_spots","building_capacity","building_id","building_name","building_enrollment","offering_type","leaders","Rooms","section_id"];
}
