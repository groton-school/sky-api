<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* AddressEdit Model
*
* @property int $id
* @property string|null $city
* @property string|null $country
* @property string|null $line_one
* @property string|null $line_two
* @property string|null $line_three
* @property bool $mailing_address
* @property string|null $postal_code
* @property bool $primary
* @property string|null $province
* @property string|null $region
* @property string|null $state
* @property int|null $type_id
* @property int|null $user_id
* @property AddressTypeLink[]|null $links
@api
*/
class AddressEdit extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","city","country","line_one","line_two","line_three","mailing_address","postal_code","primary","province","region","state","type_id","user_id","links"];
}
