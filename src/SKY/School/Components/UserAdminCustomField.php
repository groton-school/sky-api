<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * UserAdminCustomField
 *
 * @property ?int $id User Id
 * @property ?string $first_name The first name of a user
 * @property ?string $last_name The last name of a user
 * @property ?string $preferred_name Preferred Name
 * @property ?\Blackbaud\SKY\School\Components\CustomAdminField[]
 *   $custom_fields Custom Fields
 *
 * @api
 */
class UserAdminCustomField extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "first_name",
        "last_name",
        "preferred_name",
        "custom_fields",
    ];
}
