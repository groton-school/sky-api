<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * AddressAdd Model
 *
 * @property int $user_id The ID of the user of the address
 * @property int $type_id Address Type ID associated with an address. The list
 *   of address types can be found using the [GET Users Address Types
 *   List](https://developer.sky.blackbaud.com/docs/services/school/operations/V1UsersAddresstypesGet).
 * @property ?string $country Country full name (United States)
 * @property string $line_one Address Line 1 (123 Main Street)
 * @property ?string $line_two Address Line 2 (Suite 100)
 * @property ?string $line_three Address Line 3
 * @property string $city City (Charleston)
 * @property ?string $state State 2 letter abbreviation (SC) or full name.
 *   Required only if Country property is United States
 * @property ?string $postal_code Postal code
 * @property ?string $province Province
 * @property ?string $region Region
 * @property bool $mailing_address Set to true to set this address as the
 *   mailing address
 * @property bool $primary Set to true to make this the primary address
 *
 * @api
 */
class AddressAdd extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "type_id" => "int",
        "country" => "string",
        "line_one" => "string",
        "line_two" => "string",
        "line_three" => "string",
        "city" => "string",
        "state" => "string",
        "postal_code" => "string",
        "province" => "string",
        "region" => "string",
        "mailing_address" => "bool",
        "primary" => "bool",
    ];
}
