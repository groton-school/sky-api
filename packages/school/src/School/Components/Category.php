<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * News Category Model
 *
 * @property ?int $id The Id of the news category
 * @property ?string $name The name of the news category
 * @property ?string $content_type The type of content type the news comes
 *   from
 * @property ?bool $primary Set to true if the new category is the primary
 *   source of the news item
 *
 * @api
 */
class Category extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "content_type" => "string",
        "primary" => "bool",
    ];
}
