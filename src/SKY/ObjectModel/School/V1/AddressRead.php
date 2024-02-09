<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* AddressRead Model
*
* @property int $id
* @property string|null $address_type
* @property string|null $city
* @property string|null $country
* @property string|null $line_one
* @property string|null $line_three
* @property string|null $line_two
* @property AddressTypeLink[]|null $links
* @property bool $mailing_address
* @property string|null $postal_code
* @property bool $primary
* @property string|null $province
* @property string|null $region
* @property string|null $state
* @property int|null $type_id
* @property int|null $user_id
@api
*/
class AddressRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","address_type","city","country","line_one","line_three","line_two","links","mailing_address","postal_code","primary","province","region","state","type_id","user_id"];
}
