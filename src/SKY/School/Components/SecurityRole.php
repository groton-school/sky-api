<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Roles in the Education Management system that can see an allergy or
 * condition
 *
 * @property int $id The Id of the role
 * @property ?string $name The name of the role
 *
 * @api
 */
class SecurityRole extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
    ];
}
