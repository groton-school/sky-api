<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowRevenuestreamsPledges
 *
 * @property int $sequence sequence
 * @property string $constituent_id constituent
 * @property string $date date
 * @property float $amount amount
 * @property string $post_date post date
 * @property string $post_status The post status. Available values are *not
 *   posted*, *do not post*
 * @property bool $send_pledge_reminder send pledge reminders
 * @property string $frequency The frequency. Available values are *annually*,
 *   *semi-annually*, *quarterly*, *monthly*, *irregular*, *single installment*,
 *   *semi-monthly*, *biweekly*
 * @property int $number_of_installments no. installments
 * @property string $start_date starting on
 * @property float $installment_amount installment amount
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesSplits[]
 *   $splits Splits.
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesInstallments[]
 *   $installments Installments.
 * @property int $finder_number finder number
 * @property string $source_code source code
 * @property string $appeal_id appeal
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesBenefits[]
 *   $benefits Benefits.
 * @property bool $benefits_waived indicates if the benefits for the pledge
 *   were waived by the user.
 * @property string $given_anonymously indicates if the pledge was given
 *   anonymously.
 * @property string $mailing_id the marketing effort for the pledge.
 * @property string $channel The the channel for the pledge.. This code table
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/channelcode/entries
 * @property bool $do_not_acknowledge indicates if the pledge should be
 *   acknowledged.
 * @property string $pledge_sub_type The indicates the user-defined subtype of
 *   the pledge.. This simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/4f2263f4-6ca3-420f-9ac0-913d14d5a100.
 * @property string $single_designation_id designation
 * @property string $reference reference
 * @property string $category_code The revenue category. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/d9dd46ce-6651-4fcc-b9fe-e59162662224.
 * @property string $opportunity_id opportunity
 * @property string $opportunity_constituent_name opportunityconstituentname
 * @property string $opportunity_ask_date opportunityaskdate
 * @property float $opportunity_ask_amount opportunityaskamount
 * @property string $opportunity_status opportunitystatus
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesPercentagebenefits[]
 *   $percentagebenefits Percentagebenefits.
 * @property string $transaction_currency_id transaction currency
 * @property string $base_currency_id base currency
 * @property string $base_exchange_rate The exchange rate. This simple list
 *   can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/c254b16d-ba67-4431-9f7e-ab7f75f4f246?parameters=fromcurrencyid,{transactioncurrencyid}&amp;parameters=tocurrencyid,{base\_currency\_id}&amp;parameters=typecode,{1}&amp;parameters=asofdate,{date}&amp;parameters=includespotrate,{1}.
 * @property float $exchange_rate exchange rate
 * @property bool $do_not_post donotpost
 *
 * @api
 */
class NewRevenueBatchRowRevenuestreamsPledges extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "sequence" => "int",
        "constituent_id" => "string",
        "date" => "string",
        "amount" => "float",
        "post_date" => "string",
        "post_status" => "string",
        "send_pledge_reminder" => "bool",
        "frequency" => "string",
        "number_of_installments" => "int",
        "start_date" => "string",
        "installment_amount" => "float",
        "splits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesSplits[]",
        "installments" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesInstallments[]",
        "finder_number" => "int",
        "source_code" => "string",
        "appeal_id" => "string",
        "benefits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesBenefits[]",
        "benefits_waived" => "bool",
        "given_anonymously" => "string",
        "mailing_id" => "string",
        "channel" => "string",
        "do_not_acknowledge" => "bool",
        "pledge_sub_type" => "string",
        "single_designation_id" => "string",
        "reference" => "string",
        "category_code" => "string",
        "opportunity_id" => "string",
        "opportunity_constituent_name" => "string",
        "opportunity_ask_date" => "string",
        "opportunity_ask_amount" => "float",
        "opportunity_status" => "string",
        "percentagebenefits" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowRevenuestreamsPledgesPercentagebenefits[]",
        "transaction_currency_id" => "string",
        "base_currency_id" => "string",
        "base_exchange_rate" => "string",
        "exchange_rate" => "float",
        "do_not_post" => "bool",
    ];
}
