<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $name Opponents name. Required.
 * @property ?string $phone1 Opponents phone1
 * @property ?string $ad_first_name Athletic Directors first name
 * @property ?string $ad_last_name Athletic Directors last name
 * @property ?string $ad_email Athletic Directors email
 * @property ?string $fax Opponent fax
 * @property ?string $phone2 Opponent phone2
 * @property ?string $asst_ad_first_name Asst. Athletic Directors first name
 * @property ?string $asst_ad_last_name Asst. Athletic Directors last name
 * @property ?string $asst_ad_email Asst. Athletic Directors email
 * @property ?int $address_id Opponents Address Id
 * @property ?string $address_line1 Opponents Address Line 1
 * @property ?string $address_line2 Opponents Address Line 2
 * @property ?string $address_line3 Opponents Address Line 3
 * @property ?string $city Opponents City
 * @property ?string $state_short Opponents State
 * @property ?string $country Opponents Country
 * @property ?string $province Opponents Province
 * @property ?string $zip Opponents Zip
 * @property ?int $conference_id Opponents Conference Id
 *
 * @api
 */
class OpponentUpdateModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name",
        "phone1",
        "ad_first_name",
        "ad_last_name",
        "ad_email",
        "fax",
        "phone2",
        "asst_ad_first_name",
        "asst_ad_last_name",
        "asst_ad_email",
        "address_id",
        "address_line1",
        "address_line2",
        "address_line3",
        "city",
        "state_short",
        "country",
        "province",
        "zip",
        "conference_id",
    ];
}
