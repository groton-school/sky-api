<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The ID of the address to be shared with the user
 * @property int $address_type_id The address type ID that the address should
 *   be for the user
 *
 * @api
 */
class AddressShare extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "address_type_id" => "int",
    ];
}
