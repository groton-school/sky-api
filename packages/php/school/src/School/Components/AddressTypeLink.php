<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * AddressTypeLink Model
 *
 * @property ?int $type_id The ID of the type
 * @property bool $primary Returns true if the address is primary
 * @property bool $shared Returns true if changes to an address are made to
 *   all users with a shared relationship (Read Only)
 * @property ?string $shared_relationship The relationship of the shared user
 * @property ?string $shared_user The name of the shared user
 * @property ?string $type The name of the address type
 * @property ?int $user_id The ID of the user
 *
 * @api
 */
class AddressTypeLink extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "type_id" => "int",
        "primary" => "bool",
        "shared" => "bool",
        "shared_relationship" => "string",
        "shared_user" => "string",
        "type" => "string",
        "user_id" => "int",
    ];
}
