<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * AddressTypeLink Model
 *
 * @property int|null $type_id
 * @property bool $primary
 * @property bool $shared
 * @property string|null $shared_relationship
 * @property string|null $shared_user
 * @property string|null $type
 * @property int|null $user_id
 * @api
 */
class AddressTypeLink extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["type_id","primary","shared","shared_relationship","shared_user","type","user_id"];
}
