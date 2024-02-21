<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\CategoryModel $category
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class CategoryOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category" => "\Blackbaud\SKY\OneRoster\Components\CategoryModel",
        "statusInfoSet" => "\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]",
    ];
}
