<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $opponent_id ID of the opponent
 * @property string $name Name of the location
 * @property string | null $directions Directions to the location
 * @property int | null $travel_time Travel time (minutes) to the location
 * @property string | null $address_line1 Location Address Line 1
 * @property string | null $address_line2 Location Address Line 2
 * @property string | null $address_line3 Location Address Line 3
 * @property string | null $city Location City
 * @property string | null $state Location State
 * @property string | null $state_short Location State abbreviation
 * @property string | null $country Location Country
 * @property string | null $zip Location Zip
 * @property string | null $province Location Province
 * @property string | null $map_url URL to the directions/map
 *
 * @api
 */
class LocationCreateModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["opponent_id","name","directions","travel_time","address_line1","address_line2","address_line3","city","state","state_short","country","zip","province","map_url"];
}
