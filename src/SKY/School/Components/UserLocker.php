<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object for locker information
 *
 * @property ?string $number The locker number of the user.
 * @property ?string $combo The locker combination of the user.
 *
 * @api
 */
class UserLocker extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "number" => "string",
        "combo" => "string",
    ];
}
