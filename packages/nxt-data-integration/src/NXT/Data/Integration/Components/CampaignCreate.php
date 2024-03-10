<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.CAMPAIGN table in Raiser's Edge.
 *
 * @property string $campaign_id The string identifier for the campaign.
 * @property string $description The campaign description.
 * @property ?int $campaign_category_id The identifier for a campaign category
 *   associated with the campaign.
 * @property ?string $start_date The start date for the campaign.
 * @property ?string $end_date The end date for the campaign.
 * @property bool $inactive The active status of the campaign; a campaign is
 *   active if the current date is after the start date and before the end date.

 * @property ?int $default_fund_id The ID for the default fund associated with
 *   the campaign.
 * @property ?float $goal The target amount to raise through the campaign.
 * @property ?string $notes The notes associated with the campaign.
 *
 * @api
 */
class CampaignCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "campaign_id" => "string",
        "description" => "string",
        "campaign_category_id" => "int",
        "start_date" => "string",
        "end_date" => "string",
        "inactive" => "bool",
        "default_fund_id" => "int",
        "goal" => "float",
        "notes" => "string",
    ];
}
