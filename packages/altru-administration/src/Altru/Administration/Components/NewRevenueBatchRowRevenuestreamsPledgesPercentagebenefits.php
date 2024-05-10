<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRevenuestreamsPledgesPercentagebenefits
 *
 * @property string $id id
 * @property string $benefit_id benefit
 * @property float $percent_applicable_amount amount
 * @property float $value_percent percent value
 * @property float $total_value total value
 * @property string $details details
 * @property int $sequence sequence
 * @property string $transaction_currency_id transaction currency
 * @property float $transaction_total_value transaction total value
 * @property string $base_currency_id base currency
 *
 * @api
 */
class NewRevenueBatchRowRevenuestreamsPledgesPercentagebenefits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "benefit_id" => "string",
        "percent_applicable_amount" => "float",
        "value_percent" => "float",
        "total_value" => "float",
        "details" => "string",
        "sequence" => "int",
        "transaction_currency_id" => "string",
        "transaction_total_value" => "float",
        "base_currency_id" => "string",
    ];
}
