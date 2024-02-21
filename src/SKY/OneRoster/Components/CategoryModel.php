<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?string $title
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?string[] $metadata
 *
 * @api
 */
class CategoryModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "title",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
