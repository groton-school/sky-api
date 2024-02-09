<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* profile photo object
*
* @property string|null $photo_url
* @property string|null $thumbnail_url
@api
*/
class UserProfilePhoto extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["photo_url","thumbnail_url"];
}
