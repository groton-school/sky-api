<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowMatchingGifts
 *
 * @property string $id id
 * @property string $matching_constituent_id matching constituent
 * @property string $organization_id matching organization
 * @property string $relationship The relationship. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/a1abe614-e21e-4b4c-9b8c-7156137a9c06?parameters=relationshipconstituentid,{matching\_constituent\_id}&amp;parameters=reciprocalconstituentid,{organization\_id}.
 * @property string $relationship_context_id relationship context id
 * @property string $matching_gift_condition The mg condition type. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/e229a06b-4ca1-4d12-b91a-8a202573c4d3?parameters=constituent\_id,{organization\_id}&amp;parameters=currencyid,{original\_gift\_transaction\_currency\_id}.
 * @property float $amount amount
 * @property string $date date
 * @property string $single_designation_id designation
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowMatchinggiftsSplits[]
 *   $splits Splits.
 * @property bool $could_not_default_matching_gift unable to generate
 * @property string $base_currency_id base currency
 * @property string $transaction_currency The transaction currency. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/40bf0d4a-5e78-46f4-ab50-56d508e35516?parameters=pd\_account\_system\_id,{pd\_account\_system\_id}.
 * @property string $base_exchange_rate The base exchange rate. This simple
 *   list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c254b16d-ba67-4431-9f7e-ab7f75f4f246?parameters=fromcurrencyid,{transactioncurrencyid}&amp;parameters=tocurrencyid,{base\_currency\_id}&amp;parameters=typecode,{1}&amp;parameters=asofdate,{date}&amp;parameters=includespotrate,{1}.
 * @property float $exchange_rate exchange rate
 * @property string $original_gift_transaction_currency_id original gift
 *   transaction currency
 * @property string $pd_account_system_id account system
 * @property bool $apply_by_percent apply by percent
 *
 * @api
 */
class NewRevenueBatchRowMatchingGifts extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "matching_constituent_id" => "string",
        "organization_id" => "string",
        "relationship" => "string",
        "relationship_context_id" => "string",
        "matching_gift_condition" => "string",
        "amount" => "float",
        "date" => "string",
        "single_designation_id" => "string",
        "splits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowMatchinggiftsSplits[]",
        "could_not_default_matching_gift" => "bool",
        "base_currency_id" => "string",
        "transaction_currency" => "string",
        "base_exchange_rate" => "string",
        "exchange_rate" => "float",
        "original_gift_transaction_currency_id" => "string",
        "pd_account_system_id" => "string",
        "apply_by_percent" => "bool",
    ];
}
