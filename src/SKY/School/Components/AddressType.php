<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * AddressType Model
 *
 * @property int $id The ID of the address type
 * @property ?string $type The name of the address type
 *
 * @api
 */
class AddressType extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "type",
    ];
}
