<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Events Category Model
*
* @property int $category_id
* @property string|null $category_name
* @property int $association_id
* @property string|null $association_name
* @property bool $rss_ind
* @property string|null $rss_feed
@api
*/
class EventsCategory extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["category_id","category_name","association_id","association_name","rss_ind","rss_feed"];
}
