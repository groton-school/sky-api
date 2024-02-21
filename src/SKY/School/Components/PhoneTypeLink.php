<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * PhoneTypeLink Model
 *
 * @property ?int $id The type ID of a phone number; the type ID corresponds
 *   with the type of phone number (ex. Cell, Work, Home)
 * @property bool $shared Returns true if changes to a phone number are made
 *   to all users with a shared relationship (Read Only)
 * @property ?string $shared_relationship The relationship of the shared user
 * @property ?string $shared_user The name of the shared user
 * @property ?string $type_id The name of the type
 * @property ?int $user_id The ID of the user
 *
 * @api
 */
class PhoneTypeLink extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "shared" => "bool",
        "shared_relationship" => "string",
        "shared_user" => "string",
        "type_id" => "string",
        "user_id" => "int",
    ];
}
