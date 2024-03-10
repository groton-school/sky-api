<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object for passport information
 *
 * @property ?string $number The passport number of the user.
 * @property ?string $expire_date The passport expiry date. Use ISO-8601 date
 *   format: 2022-04-21.
 *
 * @api
 */
class UserPassport extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "number" => "string",
        "expire_date" => "string",
    ];
}
