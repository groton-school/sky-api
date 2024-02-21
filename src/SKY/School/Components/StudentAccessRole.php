<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for access role information.
 *
 * @property int $id The ID of the role
 * @property ?bool $has_access Set to true to allow access for users with this
 *   role.
 *
 * @api
 */
class StudentAccessRole extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "has_access",
    ];
}
