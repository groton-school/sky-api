<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowSplits
 *
 * @property string $revenue_split_id revenuesplitid
 * @property string $id id
 * @property string $designation_id designation
 * @property float $amount amount
 * @property int $sequence sequence
 * @property int $application_code application code
 * @property int $type_code type code
 * @property bool $did_campaigns_default did campaigns default
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowSplitsCampaigns[]
 *   $campaigns Campaigns.
 * @property bool $declines_gift_aid declines gift aid
 * @property bool $gift_aid_sponsorship gift aid sponsorship
 * @property string $opportunity_id opportunity
 * @property string $transaction_currency_id transaction currency
 *
 * @api
 */
class NewRevenueBatchRowSplits extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "revenue_split_id" => "string",
        "id" => "string",
        "designation_id" => "string",
        "amount" => "float",
        "sequence" => "int",
        "application_code" => "int",
        "type_code" => "int",
        "did_campaigns_default" => "bool",
        "campaigns" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowSplitsCampaigns[]",
        "declines_gift_aid" => "bool",
        "gift_aid_sponsorship" => "bool",
        "opportunity_id" => "string",
        "transaction_currency_id" => "string",
    ];
}
