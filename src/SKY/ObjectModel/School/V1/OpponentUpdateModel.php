<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string $name
* @property string|null $phone1
* @property string|null $ad_first_name
* @property string|null $ad_last_name
* @property string|null $ad_email
* @property string|null $fax
* @property string|null $phone2
* @property string|null $asst_ad_first_name
* @property string|null $asst_ad_last_name
* @property string|null $asst_ad_email
* @property int|null $address_id
* @property string|null $address_line1
* @property string|null $address_line2
* @property string|null $address_line3
* @property string|null $city
* @property string|null $state_short
* @property string|null $country
* @property string|null $province
* @property string|null $zip
* @property int|null $conference_id
@api
*/
class OpponentUpdateModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["name","phone1","ad_first_name","ad_last_name","ad_email","fax","phone2","asst_ad_first_name","asst_ad_last_name","asst_ad_email","address_id","address_line1","address_line2","address_line3","city","state_short","country","province","zip","conference_id"];
}
