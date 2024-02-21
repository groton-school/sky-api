<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * AddressExRead Model
 *
 * @property int $id The ID of the address
 * @property ?string $address_type The 'Type' of the address
 * @property ?string $city The city for the address
 * @property ?string $country The country for the address
 * @property ?string $line_one The first line of the address
 * @property ?string $line_three The third line of the address
 * @property ?string $line_two The second line of the address
 * @property bool $mailing_address Returns True if user accepts mail from the
 *   address
 * @property ?string $postal_code The postal code for the address
 * @property bool $primary Returns true if the address is primary
 * @property ?string $province The province for the address
 * @property ?string $region The region for the address
 * @property bool $shared Returns true if the address is shared with other
 *   users
 * @property ?string $state The state for the address
 * @property ?int $type_id The type ID associated with an address that is
 *   based upon a user's primary relationship to the address
 * @property ?int $user_id The ID of the user of the address
 *
 * @api
 */
class AddressExRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "address_type",
        "city",
        "country",
        "line_one",
        "line_three",
        "line_two",
        "mailing_address",
        "postal_code",
        "primary",
        "province",
        "region",
        "shared",
        "state",
        "type_id",
        "user_id",
    ];
}
