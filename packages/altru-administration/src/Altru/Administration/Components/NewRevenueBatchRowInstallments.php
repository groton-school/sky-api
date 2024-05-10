<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowInstallments
 *
 * @property string $id id
 * @property string $date date
 * @property float $amount amount
 * @property float $applied applied amount
 * @property float $receipt_amount receipt amount
 * @property int $sequence sequence
 * @property string $transaction_currency_id transaction currency
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowInstallmentsInstallmentsplits[]
 *   $installmentsplits Installmentsplits.
 *
 * @api
 */
class NewRevenueBatchRowInstallments extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "date" => "string",
        "amount" => "float",
        "applied" => "float",
        "receipt_amount" => "float",
        "sequence" => "int",
        "transaction_currency_id" => "string",
        "installmentsplits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowInstallmentsInstallmentsplits[]",
    ];
}
