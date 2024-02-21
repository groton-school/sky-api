<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $role_id The ID of role
 * @property ?bool $has_access Set to true to allow access for this type of
 *   user
 *
 * @api
 */
class MedicalSecurityRole extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "role_id",
        "has_access",
    ];
}
