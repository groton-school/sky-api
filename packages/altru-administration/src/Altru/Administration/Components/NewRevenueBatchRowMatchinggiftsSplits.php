<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowMatchinggiftsSplits
 *
 * @property string $id id
 * @property string $designation_id designation
 * @property float $amount amount
 * @property int $sequence sequence
 * @property string $transaction_currency_id transaction currency
 *
 * @api
 */
class NewRevenueBatchRowMatchinggiftsSplits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "designation_id" => "string",
        "amount" => "float",
        "sequence" => "int",
        "transaction_currency_id" => "string",
    ];
}
