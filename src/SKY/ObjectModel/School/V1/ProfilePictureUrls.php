<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property string|null $large_filename_url
* @property string|null $thumb_filename_url
@api
*/
class ProfilePictureUrls extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["large_filename_url","thumb_filename_url"];
}
