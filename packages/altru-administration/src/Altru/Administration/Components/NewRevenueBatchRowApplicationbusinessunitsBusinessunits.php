<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowApplicationbusinessunitsBusinessunits
 *
 * @property string $business_unit The business unit. This code table can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/businessunitcode/entries

 * @property float $amount amount
 * @property string $base_currency_id base currency
 *
 * @api
 */
class NewRevenueBatchRowApplicationbusinessunitsBusinessunits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "business_unit" => "string",
        "amount" => "float",
        "base_currency_id" => "string",
    ];
}
