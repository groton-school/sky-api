<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $large_filename_url URL to users Large profile
 *   picture
 * @property string | null $thumb_filename_url URL to users Thumbnail profile
 *   picture
 *
 * @api
 */
class ProfilePictureUrls extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["large_filename_url","thumb_filename_url"];
}
