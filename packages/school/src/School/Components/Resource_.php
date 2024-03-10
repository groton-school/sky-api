<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id
 * @property ?string $title
 * @property ?string $description
 * @property ?string $photo
 * @property ?string $type
 * @property ?string $url
 * @property ?string $category
 *
 * @api
 */
class Resource_ extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "title" => "string",
        "description" => "string",
        "photo" => "string",
        "type" => "string",
        "url" => "string",
        "category" => "string",
    ];
}
