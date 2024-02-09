<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* NewsItem Model
*
* @property int|null $id
* @property string|null $headline
* @property string|null $author
* @property string|null $short_description
* @property string|null $long_description
* @property bool|null $featured
* @property MediaItem[]|null $media_item
* @property Category[]|null $categories
@api
*/
class NewsItem extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","headline","author","short_description","long_description","featured","media_item","categories"];
}
