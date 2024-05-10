<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ViewIndividualRevenueSummary
 *
 * @property string $household_id The household ID.
 * @property float $total_giving The total revenue.
 * @property float $total_house_hold_and_member_giving The total household
 *   revenue.
 * @property float $membership_revenue The membership revenue.
 * @property float $event_revenue The event revenue.
 * @property bool $is_registrant Indicates whether is registrant.
 * @property bool $is_volunteer Indicates whether is volunteer.
 * @property string $revenue_id The revenue ID.
 * @property float $ticket_revenue The ticket revenue.
 * @property float $facility_revenue The facility revenue.
 * @property float $merchandise_revenue The merchandise revenue.
 * @property string $currency_id The currency ID.
 *
 * @api
 */
class IndividualRevenueSummaryView extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "household_id" => "string",
        "total_giving" => "float",
        "total_house_hold_and_member_giving" => "float",
        "membership_revenue" => "float",
        "event_revenue" => "float",
        "is_registrant" => "bool",
        "is_volunteer" => "bool",
        "revenue_id" => "string",
        "ticket_revenue" => "float",
        "facility_revenue" => "float",
        "merchandise_revenue" => "float",
        "currency_id" => "string",
    ];
}
