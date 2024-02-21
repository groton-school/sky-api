<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class MediaItem extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "type",
        "title",
        "caption",
        "url",
    ];
}
