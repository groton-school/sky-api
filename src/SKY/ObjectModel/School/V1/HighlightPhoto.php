<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Photo model
*
* @property int|null $id
* @property string|null $caption
* @property string|null $large_filename
* @property string|null $large_filename_url
* @property string|null $thumb_filename
* @property string|null $thumb_filename_url
@api
*/
class HighlightPhoto extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","caption","large_filename","large_filename_url","thumb_filename","thumb_filename_url"];
}
