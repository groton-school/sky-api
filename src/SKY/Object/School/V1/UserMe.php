<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property string|null $preferred_name
 * @property bool $is_student
 * @property bool $is_parent
 * @property bool $is_faculty
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $suffix
 * @property Role[]|null $roles
 * @api
 */
class UserMe extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","preferred_name","is_student","is_parent","is_faculty","first_name","last_name","suffix","roles"];
}
