<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Highlight model for athletic game highlights
 *
 * @property int $id Highlight ID
 * @property int | null $athletic_schedule_id Athletic Schedule ID
 * @property string | null $author Author
 * @property string | null $headline Headline
 * @property string | null $brief_description Brief Description
 * @property string | null $long_description Long Description
 * @property string | null $publish_date Publish Date
 * @property string | null $expire_date Expire Date
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\HighlightPhoto[] | null
 *   $photos List of Photos
 *
 * @api
 */
class Highlight extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","athletic_schedule_id","author","headline","brief_description","long_description","publish_date","expire_date","photos"];
}
