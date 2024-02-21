<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewsCategory Model
 *
 * @property ?int $category_id
 * @property ?string $category_name
 * @property ?int $association_id
 * @property ?string $association_name
 * @property ?bool $rss_ind
 * @property ?string $rss_feed
 *
 * @api
 */
class NewsCategory extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category_id" => "int",
        "category_name" => "string",
        "association_id" => "int",
        "association_name" => "string",
        "rss_ind" => "bool",
        "rss_feed" => "string",
    ];
}
