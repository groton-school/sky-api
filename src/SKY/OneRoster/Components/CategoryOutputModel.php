<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\CategoryModel $category
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class CategoryOutputModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category",
        "statusInfoSet",
    ];
}
