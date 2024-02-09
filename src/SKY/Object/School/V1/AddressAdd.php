<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * AddressAdd Model
 *
 * @property int $user_id
 * @property int $type_id
 * @property string|null $country
 * @property string $line_one
 * @property string|null $line_two
 * @property string|null $line_three
 * @property string $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property string|null $province
 * @property string|null $region
 * @property bool $mailing_address
 * @property bool $primary
 * @api
 */
class AddressAdd extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","type_id","country","line_one","line_two","line_three","city","state","postal_code","province","region","mailing_address","primary"];
}
