<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowBenefits
 *
 * @property string $id id
 * @property string $benefit_id benefit
 * @property int $quantity quantity
 * @property float $unit_value unit value
 * @property float $total_value total value
 * @property string $details details
 * @property int $sequence sequence
 * @property float $transaction_total_value transaction total value
 * @property string $benefit_currency_id benefit currency
 * @property string $transaction_currency_id transaction currency
 * @property string $base_currency_id base currency
 *
 * @api
 */
class NewRevenueBatchRowBenefits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "benefit_id" => "string",
        "quantity" => "int",
        "unit_value" => "float",
        "total_value" => "float",
        "details" => "string",
        "sequence" => "int",
        "transaction_total_value" => "float",
        "benefit_currency_id" => "string",
        "transaction_currency_id" => "string",
        "base_currency_id" => "string",
    ];
}
