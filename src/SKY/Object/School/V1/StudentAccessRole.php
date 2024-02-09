<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * An object for access role information.
 *
 * @property int $id
 * @property bool|null $has_access
 * @api
 */
class StudentAccessRole extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","has_access"];
}
