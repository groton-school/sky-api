<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * AddressAdd Model
 *
 * @property int $user_id The ID of the user of the address
 * @property int $type_id Address Type ID associated with an address. The list
 *   of address types can be found using the [GET Users Address Types
 *   List](https://developer.sky.blackbaud.com/docs/services/school/operations/V1UsersAddresstypesGet).
 * @property string $country Country full name (United States)
 * @property string $line_one Address Line 1 (123 Main Street)
 * @property string $line_two Address Line 2 (Suite 100)
 * @property string $line_three Address Line 3
 * @property string $city City (Charleston)
 * @property string $state State 2 letter abbreviation (SC) or full name.
 *   Required only if Country property is United States
 * @property string $postal_code Postal code
 * @property string $province Province
 * @property string $region Region
 * @property bool $mailing_address Set to true to set this address as the
 *   mailing address
 * @property bool $primary Set to true to make this the primary address
 *
 * @api
 */
class AddressAdd extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "user_id",
        "type_id",
        "country",
        "line_one",
        "line_two",
        "line_three",
        "city",
        "state",
        "postal_code",
        "province",
        "region",
        "mailing_address",
        "primary",
    ];
}
