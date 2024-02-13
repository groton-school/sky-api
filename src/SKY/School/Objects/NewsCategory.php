<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * NewsCategory Model
 *
 * @property int | null $category_id 
 * @property string | null $category_name 
 * @property int | null $association_id 
 * @property string | null $association_name 
 * @property bool | null $rss_ind 
 * @property string | null $rss_feed 
 *
 * @api
 */
class NewsCategory extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["category_id","category_name","association_id","association_name","rss_ind","rss_feed"];
}
