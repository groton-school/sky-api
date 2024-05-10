<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowInstallmentsInstallmentsplits
 *
 * @property string $id id
 * @property string $installment_split_id installmentsplitid
 * @property string $designation The designation. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/1a3946b9-a8a2-4732-acad-9eb9ed72f82e?parameters=revenueid,{parent.currentrecordid}.
 * @property float $amount amount
 * @property float $applied applied
 * @property string $transaction_currency_id transaction currency id
 * @property string $revenue_split_id revenue split id
 * @property int $payment_count number of payments applied to this split
 * @property int $write_off_count number of write-offs applied to this split
 *
 * @api
 */
class NewRevenueBatchRowInstallmentsInstallmentsplits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "installment_split_id" => "string",
        "designation" => "string",
        "amount" => "float",
        "applied" => "float",
        "transaction_currency_id" => "string",
        "revenue_split_id" => "string",
        "payment_count" => "int",
        "write_off_count" => "int",
    ];
}
