<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * AddressType Model
 *
 * @property int $id The ID of the address type
 * @property ?string $type The name of the address type
 *
 * @api
 */
class AddressType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "type" => "string",
    ];
}
