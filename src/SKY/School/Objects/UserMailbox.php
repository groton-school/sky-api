<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * An object for mailbox information
 *
 * @property string $number The mailbox number of the user.
 * @property string $combo The mailbox combination of the user.
 *
 * @api
 */
class UserMailbox extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "number",
        "combo",
    ];
}
