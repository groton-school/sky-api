<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UserBaseRead Model
 *
 * @property ?int $id The ID associated with a user
 * @property ?string $email The email address of a user
 * @property ?string $first_name The first name of a user
 * @property ?string $last_name The last name of a user
 * @property ?string $maiden_name The maiden name of a user
 * @property ?string $middle_name The middle name of a user
 * @property ?string $preferred_name The nickname of a user
 * @property ?string $preferred_last_name The preferred last name of a user
 * @property ?string $prefix The prefix of a user
 * @property ?string $suffix The suffix of a user
 *
 * @api
 */
class UserBaseRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "email" => "string",
        "first_name" => "string",
        "last_name" => "string",
        "maiden_name" => "string",
        "middle_name" => "string",
        "preferred_name" => "string",
        "preferred_last_name" => "string",
        "prefix" => "string",
        "suffix" => "string",
    ];
}
