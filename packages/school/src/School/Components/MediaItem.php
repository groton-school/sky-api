<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Media Model
 *
 * @property ?string $type
 * @property ?string $title
 * @property ?string $caption
 * @property ?string $url
 *
 * @api
 */
class MediaItem extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "type" => "string",
        "title" => "string",
        "caption" => "string",
        "url" => "string",
    ];
}
