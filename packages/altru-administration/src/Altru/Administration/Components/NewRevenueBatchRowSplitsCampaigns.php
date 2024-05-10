<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * NewRevenueBatchRowSplitsCampaigns
 *
 * @property string $id id
 * @property string $campaign_id campaign
 * @property string $campaign_sub_priority The campaign subpriority. This
 *   simple list can be queried at
 *   https://api.sky.blackbaud.com/alt-adnmg/simplelists/e3e9e22a-85f2-4a77-ba74-25b391252dab?parameters=campaign\_id,{campaign\_id}.
 *
 * @api
 */
class NewRevenueBatchRowSplitsCampaigns extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "campaign_id" => "string",
        "campaign_sub_priority" => "string",
    ];
}
