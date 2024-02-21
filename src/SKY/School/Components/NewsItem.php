<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewsItem Model
 *
 * @property ?int $id The ID of the news item
 * @property ?string $headline The news item title
 * @property ?string $author The author os the news item
 * @property ?string $short_description The short description field for the
 *   new item
 * @property ?string $long_description The long description field for the new
 *   item
 * @property ?bool $featured Returns true if the news item is featured
 * @property ?\Blackbaud\SKY\School\Components\MediaItem[] $media_item
 * @property ?\Blackbaud\SKY\School\Components\Category[] $categories The list
 *   of categories the news item is published to
 *
 * @api
 */
class NewsItem extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "headline" => "string",
        "author" => "string",
        "short_description" => "string",
        "long_description" => "string",
        "featured" => "bool",
        "media_item" => "\Blackbaud\SKY\School\Components\MediaItem[]",
        "categories" => "\Blackbaud\SKY\School\Components\Category[]",
    ];
}
