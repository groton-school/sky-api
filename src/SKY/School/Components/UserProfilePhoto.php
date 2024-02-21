<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * profile photo object
 *
 * @property string $photo_url The photo url of the user.
 * @property string $thumbnail_url The thumbnail url of the user.
 *
 * @api
 */
class UserProfilePhoto extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "photo_url",
        "thumbnail_url",
    ];
}
