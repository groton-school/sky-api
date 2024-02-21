<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $large_filename_url URL to users Large profile picture
 * @property ?string $thumb_filename_url URL to users Thumbnail profile
 *   picture
 *
 * @api
 */
class ProfilePictureUrls extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "large_filename_url",
        "thumb_filename_url",
    ];
}
