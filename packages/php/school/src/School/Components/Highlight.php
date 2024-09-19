<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class Highlight extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "athletic_schedule_id" => "int",
        "author" => "string",
        "headline" => "string",
        "brief_description" => "string",
        "long_description" => "string",
        "publish_date" => "string",
        "expire_date" => "string",
        "photos" => "\Blackbaud\SKY\School\Components\HighlightPhoto[]",
    ];
}
