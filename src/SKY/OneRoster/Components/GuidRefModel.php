<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $sourcedId
 * @property ?string $href
 * @property ?string $type
 *
 * @api
 */
class GuidRefModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "sourcedId" => "string",
        "href" => "string",
        "type" => "string",
    ];
}
