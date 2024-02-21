<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?\Blackbaud\SKY\OneRoster\Components\LineItemModel[] $lineItems
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class LineItemsOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "lineItems" => "\Blackbaud\SKY\OneRoster\Components\LineItemModel[]",
        "statusInfoSet" => "\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]",
    ];
}
