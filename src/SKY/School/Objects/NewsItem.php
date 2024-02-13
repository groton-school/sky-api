<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * NewsItem Model
 *
 * @property int | null $id The ID of the news item
 * @property string | null $headline The news item title
 * @property string | null $author The author os the news item
 * @property string | null $short_description The short description field for
 *   the new item
 * @property string | null $long_description The long description field for
 *   the new item
 * @property bool | null $featured Returns true if the news item is featured
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\MediaItem[] | null
 *   $media_item 
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Category[] | null
 *   $categories The list of categories the news item is published to
 *
 * @api
 */
class NewsItem extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","headline","author","short_description","long_description","featured","media_item","categories"];
}
