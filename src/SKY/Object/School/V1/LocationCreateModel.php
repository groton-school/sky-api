<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $opponent_id
 * @property string $name
 * @property string|null $directions
 * @property int|null $travel_time
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $address_line3
 * @property string|null $city
 * @property string|null $state
 * @property string|null $state_short
 * @property string|null $country
 * @property string|null $zip
 * @property string|null $province
 * @property string|null $map_url
 * @api
 */
class LocationCreateModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["opponent_id","name","directions","travel_time","address_line1","address_line2","address_line3","city","state","state_short","country","zip","province","map_url"];
}
