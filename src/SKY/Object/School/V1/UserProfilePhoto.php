<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * profile photo object
 *
 * @property string|null $photo_url
 * @property string|null $thumbnail_url
 * @api
 */
class UserProfilePhoto extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["photo_url","thumbnail_url"];
}
