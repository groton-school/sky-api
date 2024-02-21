<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property bool $value The return value for the POST
 *
 * @api
 */
class PostResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "value" => "bool",
    ];
}
