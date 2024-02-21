<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Role Model
 *
 * @property ?int $id The ID of a role
 * @property ?int $base_role_id The ID used to associate roles with the
 *   original role; all roles are based upon preexisting base role IDs
 * @property ?bool $hidden Returns True if the role is hidden
 * @property ?string $name The label used to identify a role
 *
 * @api
 */
class Role extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "base_role_id",
        "hidden",
        "name",
    ];
}
