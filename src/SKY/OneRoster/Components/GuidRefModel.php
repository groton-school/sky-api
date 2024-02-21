<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $sourcedId
 * @property ?string $href
 * @property ?string $type
 *
 * @api
 */
class GuidRefModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "sourcedId",
        "href",
        "type",
    ];
}
