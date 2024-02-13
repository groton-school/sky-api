<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for locker information
 *
 * @property string | null $number The locker number of the user.
 * @property string | null $combo The locker combination of the user.
 *
 * @api
 */
class UserLocker extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["number","combo"];
}
