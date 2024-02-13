<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id ID of the location
 * @property string | null $name Name of the location
 * @property string | null $address_line1 Address Line 1
 * @property string | null $address_line2 Address Line 2
 * @property string | null $address_line3 Address Line 3
 * @property string | null $city City
 * @property string | null $state State
 * @property string | null $state_short State abbreviation
 * @property string | null $country Country
 * @property string | null $zip Zip
 * @property string | null $province Province
 * @property string | null $map_url URL to the directions/map
 * @property string | null $directions Directions to the location
 * @property int | null $travel_time Travel time (minutes) to the location
 * @property int | null $opponent_id Opponent ID associated with this location
 *
 * @api
 */
class Location extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","address_line1","address_line2","address_line3","city","state","state_short","country","zip","province","map_url","directions","travel_time","opponent_id"];
}
