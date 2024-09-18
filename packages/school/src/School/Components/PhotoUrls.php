<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Player Photos Url (roster photo or profile photo)
 *
 * @property ?string $large_filename_url URL to players Large photo
 * @property ?string $thumb_filename_url URL to player Thumbnail photo
 *
 * @api
 */
class PhotoUrls extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "large_filename_url" => "string",
        "thumb_filename_url" => "string",
    ];
}
