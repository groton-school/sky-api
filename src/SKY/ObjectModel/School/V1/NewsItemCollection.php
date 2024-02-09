<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* A Collection
*
* @property int $count
* @property string|null $next_link
* @property NewsItem[]|null $value
@api
*/
class NewsItemCollection extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["count","next_link","value"];
}
