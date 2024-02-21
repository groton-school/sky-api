<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $title
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?string[] $metadata
 *
 * @api
 */
class CategoryModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title" => "string",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "string[]",
    ];
}
