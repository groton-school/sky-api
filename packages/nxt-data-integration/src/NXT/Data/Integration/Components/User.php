<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Represents the fields for a user record in dbo.USERS.
 *
 * @property int $user_id The user ID.
 * @property ?string $name The Raiser's Edge user name.
 * @property ?int $constituent_id The constituent ID associated with a user.
 * @property bool $is_fundraiser Indicates whether the user is a fundraiser.
 *
 * @api
 */
class User extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "name" => "string",
        "constituent_id" => "int",
        "is_fundraiser" => "bool",
    ];
}
