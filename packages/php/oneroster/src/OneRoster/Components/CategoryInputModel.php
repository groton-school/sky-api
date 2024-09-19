<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\CategoryModel $category
 *
 * @api
 */
class CategoryInputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category" => "\Blackbaud\SKY\OneRoster\Components\CategoryModel",
    ];
}
