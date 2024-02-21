<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\CategoryModel[] $categories
 * @property \Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class CategoriesOutputModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "categories",
        "statusInfoSet",
    ];
}
