<?php

namespace Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Objects\LineItemModel[] $lineItems
 * @property \Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] $statusInfoSet
 *
 * @api
 */
class LineItemsOutputModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "lineItems",
        "statusInfoSet",
    ];
}
