<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $role_id The ID of role
 * @property bool | null $has_access Set to true to allow access for this type
 *   of user
 *
 * @api
 */
class MedicalSecurityRole extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["role_id","has_access"];
}
