<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class Resource_ extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "title",
        "description",
        "photo",
        "type",
        "url",
        "category",
    ];
}
