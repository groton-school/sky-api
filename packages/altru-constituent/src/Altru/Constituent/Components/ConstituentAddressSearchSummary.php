<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * SearchConstituentAddresses
 *
 * @property string $id The ID.
 * @property string $name The name.
 * @property string $address The address.
 * @property string $city The city.
 * @property string $state The state.
 * @property string $post_code The post code.
 * @property string $full_address The full address.
 * @property string $key_name The last name.
 * @property string $first_name The first name.
 * @property bool $primary Indicates whether is primary address.
 *
 * @api
 */
class ConstituentAddressSearchSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "name" => "string",
        "address" => "string",
        "city" => "string",
        "state" => "string",
        "post_code" => "string",
        "full_address" => "string",
        "key_name" => "string",
        "first_name" => "string",
        "primary" => "bool",
    ];
}
