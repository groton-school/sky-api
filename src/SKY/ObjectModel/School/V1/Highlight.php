<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Highlight model for athletic game highlights
*
* @property int $id
* @property int|null $athletic_schedule_id
* @property string|null $author
* @property string|null $headline
* @property string|null $brief_description
* @property string|null $long_description
* @property string|null $publish_date
* @property string|null $expire_date
* @property HighlightPhoto[]|null $photos
@api
*/
class Highlight extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","athletic_schedule_id","author","headline","brief_description","long_description","publish_date","expire_date","photos"];
}
