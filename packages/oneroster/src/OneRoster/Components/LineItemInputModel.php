<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\LineItemModel $lineItem
 *
 * @api
 */
class LineItemInputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "lineItem" => "\Blackbaud\SKY\OneRoster\Components\LineItemModel",
    ];
}
