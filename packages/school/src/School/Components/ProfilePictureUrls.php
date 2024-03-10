<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $large_filename_url URL to users Large profile picture
 * @property ?string $thumb_filename_url URL to users Thumbnail profile
 *   picture
 *
 * @api
 */
class ProfilePictureUrls extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "large_filename_url" => "string",
        "thumb_filename_url" => "string",
    ];
}
