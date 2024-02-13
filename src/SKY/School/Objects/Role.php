<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Role Model
 *
 * @property int | null $id The ID of a role
 * @property int | null $base_role_id The ID used to associate roles with the
 *   original role; all roles are based upon preexisting base role IDs
 * @property bool | null $hidden Returns True if the role is hidden
 * @property string | null $name The label used to identify a role
 *
 * @api
 */
class Role extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","base_role_id","hidden","name"];
}
