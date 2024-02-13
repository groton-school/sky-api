<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $name Opponents name. Required.
 * @property string | null $phone1 Opponents phone1
 * @property string | null $ad_first_name Athletic Directors first name
 * @property string | null $ad_last_name Athletic Directors last name
 * @property string | null $ad_email Athletic Directors email
 * @property string | null $fax Opponent fax
 * @property string | null $phone2 Opponent phone2
 * @property string | null $asst_ad_first_name Asst. Athletic Directors first
 *   name
 * @property string | null $asst_ad_last_name Asst. Athletic Directors last
 *   name
 * @property string | null $asst_ad_email Asst. Athletic Directors email
 * @property int | null $address_id Opponents Address Id
 * @property string | null $address_line1 Opponents Address Line 1
 * @property string | null $address_line2 Opponents Address Line 2
 * @property string | null $address_line3 Opponents Address Line 3
 * @property string | null $city Opponents City
 * @property string | null $state_short Opponents State
 * @property string | null $country Opponents Country
 * @property string | null $province Opponents Province
 * @property string | null $zip Opponents Zip
 * @property int | null $conference_id Opponents Conference Id
 *
 * @api
 */
class OpponentUpdateModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["name","phone1","ad_first_name","ad_last_name","ad_email","fax","phone2","asst_ad_first_name","asst_ad_last_name","asst_ad_email","address_id","address_line1","address_line2","address_line3","city","state_short","country","province","zip","conference_id"];
}
