<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UserAdminCustomField
 *
 * @property ?int $id User Id
 * @property ?string $first_name The first name of a user
 * @property ?string $last_name The last name of a user
 * @property ?string $preferred_name Preferred Name
 * @property ?\Blackbaud\SKY\School\Components\CustomAdminField[]
 *   $custom_fields Custom Fields
 * @property ?string $preferred_last_name Preferred Last Name
 *
 * @api
 */
class UserAdminCustomField extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "preferred_name" => "string",
        "custom_fields" => "\Blackbaud\SKY\School\Components\CustomAdminField[]",
        "preferred_last_name" => "string",
    ];
}
