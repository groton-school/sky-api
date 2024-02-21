<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for locker information
 *
 * @property string $number The locker number of the user.
 * @property string $combo The locker combination of the user.
 *
 * @api
 */
class UserLocker extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "number",
        "combo",
    ];
}
