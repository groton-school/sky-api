<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $type
 * @property ?string $identifier
 *
 * @api
 */
class UserIdModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "type" => "string",
        "identifier" => "string",
    ];
}
