<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * AddressRead Model
 *
 * @property int $id The ID of the address
 * @property string | null $address_type The 'Type' of the address
 * @property string | null $city The city for the address
 * @property string | null $country The country for the address
 * @property string | null $line_one The first line of the address
 * @property string | null $line_three The third line of the address
 * @property string | null $line_two The second line of the address
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\AddressTypeLink[] |
 *   null $links Returns each instance of an address type for each
 *   relationship to the user
 * @property bool $mailing_address Returns True if user accepts mail from the
 *   address
 * @property string | null $postal_code The postal code for the address
 * @property bool $primary Returns true if the address is primary
 * @property string | null $province The province for the address
 * @property string | null $region The region for the address
 * @property string | null $state The state for the address
 * @property int | null $type_id The type ID associated with an address that
 *   is based upon a user's primary relationship to the address
 * @property int | null $user_id The ID of the user of the address
 *
 * @api
 */
class AddressRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","address_type","city","country","line_one","line_three","line_two","links","mailing_address","postal_code","primary","province","region","state","type_id","user_id"];
}
