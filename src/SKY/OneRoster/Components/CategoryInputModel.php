<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\CategoryModel $category
 *
 * @api
 */
class CategoryInputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "category",
    ];
}
