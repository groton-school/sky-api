<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowAdditionalApplicationsStream
 *
 * @property string $id id
 * @property string $type The application type. Available values are
 *   *donation*, *other*, *unapplied matching gift payment*, *sponsorship
 *   additional donation*
 * @property float $applied applied
 * @property float $applied_percent applied percent
 * @property string $designation_id designation
 * @property string $other_type The other type. This code table can be queried
 *   at
 *   https://api.sky.blackbaud.com/alt-adnmg/codetables/revenueothertypecode/entries
 * @property bool $declines_gift_aid declines gift aid
 * @property bool $gift_aid_sponsorship gift aid sponsorship
 * @property string $opportunity_id opportunity
 * @property string $sponsorship The sponsorship. This simple list can be
 *   queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/98470a77-d098-433f-8871-224dc2f43de9?parameters=constituent\_id,{constituent\_id}.
 * @property string $category_code The revenue category. This simple list can
 *   be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/d9dd46ce-6651-4fcc-b9fe-e59162662224.
 * @property bool $did_campaigns_default did campaigns default
 * @property \Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowAdditionalapplicationsstreamCampaigns[]
 *   $campaigns Campaigns.
 * @property string $transaction_currency_id transaction currency
 *
 * @api
 */
class NewRevenueBatchRowAdditionalApplicationsStream extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "type" => "string",
        "applied" => "float",
        "applied_percent" => "float",
        "designation_id" => "string",
        "other_type" => "string",
        "declines_gift_aid" => "bool",
        "gift_aid_sponsorship" => "bool",
        "opportunity_id" => "string",
        "sponsorship" => "string",
        "category_code" => "string",
        "did_campaigns_default" => "bool",
        "campaigns" => "\Blackbaud\SKY\Altru\Administration\Components\NewRevenueBatchRowAdditionalapplicationsstreamCampaigns[]",
        "transaction_currency_id" => "string",
    ];
}
