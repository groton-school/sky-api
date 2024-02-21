<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\LineItemModel $lineItem
 *
 * @api
 */
class LineItemInputModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "lineItem",
    ];
}
