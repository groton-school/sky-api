<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class OpponentUpdateModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name" => "string",
        "phone1" => "string",
        "ad_first_name" => "string",
        "ad_last_name" => "string",
        "ad_email" => "string",
        "fax" => "string",
        "phone2" => "string",
        "asst_ad_first_name" => "string",
        "asst_ad_last_name" => "string",
        "asst_ad_email" => "string",
        "address_id" => "int",
        "address_line1" => "string",
        "address_line2" => "string",
        "address_line3" => "string",
        "city" => "string",
        "state_short" => "string",
        "country" => "string",
        "province" => "string",
        "zip" => "string",
        "conference_id" => "int",
    ];
}
