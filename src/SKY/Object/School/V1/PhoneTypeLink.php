<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * PhoneTypeLink Model
 *
 * @property int|null $id
 * @property bool $shared
 * @property string|null $shared_relationship
 * @property string|null $shared_user
 * @property string|null $type_id
 * @property int|null $user_id
 * @api
 */
class PhoneTypeLink extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","shared","shared_relationship","shared_user","type_id","user_id"];
}
