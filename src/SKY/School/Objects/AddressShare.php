<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The ID of the address to be shared with the user
 * @property int $address_type_id The address type ID that the address should
 *   be for the user
 *
 * @api
 */
class AddressShare extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "address_type_id",
    ];
}
