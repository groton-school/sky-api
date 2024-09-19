<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * AddressPatch Model
 *
 * @property int $id The ID of the address
 * @property ?string $city The city for the address
 * @property ?string $country The country for the address
 * @property ?string $line_one The first line of the address
 * @property ?string $line_two The second line of the address
 * @property ?string $line_three The third line of the address
 * @property bool $mailing_address Returns True if user accepts mail from the
 *   address
 * @property ?string $postal_code The postal code for the address
 * @property bool $primary Returns true if the address is primary
 * @property ?string $province The province for the address
 * @property ?string $region The region for the address
 * @property ?string $state The state for the address
 * @property ?int $type_id The type ID associated with an address that is
 *   based upon a user's primary relationship to the address
 * @property ?int $user_id The ID of the user of the address
 * @property ?\Blackbaud\SKY\School\Components\AddressTypeLink[] $links
 *   Returns each instance of an address type for each relationship to the user

 * @property \Blackbaud\SKY\School\Components\Salutations $salutations
 *   Salutations Model
 * @property ?string[] $fields_to_delete An array of strings representing
 *   field names. Due to an inherent check against deleting data only accessible
 *   through the UI, this unusual step is necessary. To delete or clear data
 *   from a user field (such as line\_two or line\_three), you must include the
 *   field in this array. If a field is included in this array, the data for
 *   that field will be deleted and this will override any other value set for
 *   the field in the request body. Only fields that can be cleared will be
 *   processed. Any required fields, Booleans or fields with no blank option
 *   will be ignored. Allowed values: The field name as listed for the request
 *   body (e.g. "line\_two" or "line\_three").
 *
 * @api
 */
class AddressPatch extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "city" => "string",
        "country" => "string",
        "line_one" => "string",
        "line_two" => "string",
        "line_three" => "string",
        "mailing_address" => "bool",
        "postal_code" => "string",
        "primary" => "bool",
        "province" => "string",
        "region" => "string",
        "state" => "string",
        "type_id" => "int",
        "user_id" => "int",
        "links" => "\Blackbaud\SKY\School\Components\AddressTypeLink[]",
        "salutations" => "\Blackbaud\SKY\School\Components\Salutations",
        "fields_to_delete" => "string[]",
    ];
}
