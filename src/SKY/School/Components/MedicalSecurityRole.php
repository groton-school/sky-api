<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $role_id The ID of role
 * @property ?bool $has_access Set to true to allow access for this type of
 *   user
 *
 * @api
 */
class MedicalSecurityRole extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "role_id" => "int",
        "has_access" => "bool",
    ];
}
