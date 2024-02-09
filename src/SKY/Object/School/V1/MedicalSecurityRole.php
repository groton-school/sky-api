<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $role_id
 * @property bool|null $has_access
 * @api
 */
class MedicalSecurityRole extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["role_id","has_access"];
}
