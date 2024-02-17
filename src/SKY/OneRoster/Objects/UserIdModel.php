<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string $type
 * @property string $identifier
 *
 * @api
 */
class UserIdModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "type",
        "identifier",
    ];
}
