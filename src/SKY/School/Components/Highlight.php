<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Highlight model for athletic game highlights
 *
 * @property int $id Highlight ID
 * @property ?int $athletic_schedule_id Athletic Schedule ID
 * @property ?string $author Author
 * @property ?string $headline Headline
 * @property ?string $brief_description Brief Description
 * @property ?string $long_description Long Description
 * @property ?string $publish_date Publish Date
 * @property ?string $expire_date Expire Date
 * @property ?\Blackbaud\SKY\School\Components\HighlightPhoto[] $photos List
 *   of Photos
 *
 * @api
 */
class Highlight extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "athletic_schedule_id",
        "author",
        "headline",
        "brief_description",
        "long_description",
        "publish_date",
        "expire_date",
        "photos",
    ];
}
