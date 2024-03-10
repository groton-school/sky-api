<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Additional information about an appeal record.
 *
 * @property ?string $appeal_category The category associated with the appeal.
 * @property ?string $campaign The default campaign associated with the
 *   appeal.
 * @property int $id The immutable system record ID of the appeal.
 * @property string $appeal_id The string identifier for the appeal.
 * @property ?int $campaign_id The ID for the default campaign associated with
 *   the appeal.
 * @property ?int $appeal_category_id The unique identifier for an appeal
 *   category associated with the appeal.
 * @property string $description The appeal description that appears as the
 *   full name at the top of its record.
 * @property float $goal The target amount to raise through the appeal.
 * @property ?string $start_date The start date for the appeal.
 * @property ?string $end_date The end date for the appeal.
 * @property bool $inactive The active status of the appeal; an appeal is
 *   active if the current date is after the start date and before the end date.

 * @property ?int $default_fund_id The ID for the default fund associated with
 *   the appeal.
 * @property ?string $notes The notes associated with the appeal.
 * @property ?int $number_solicited The number of constituents solicited in
 *   the appeal.
 * @property float $default_gift_amount The monetary amount of the default
 *   gift. This property defaults to 0.00 if no amount is specified.
 *
 * @api
 */
class Appeal extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "appeal_category" => "string",
        "campaign" => "string",
        "id" => "int",
        "appeal_id" => "string",
        "campaign_id" => "int",
        "appeal_category_id" => "int",
        "description" => "string",
        "goal" => "float",
        "start_date" => "string",
        "end_date" => "string",
        "inactive" => "bool",
        "default_fund_id" => "int",
        "notes" => "string",
        "number_solicited" => "int",
        "default_gift_amount" => "float",
    ];
}
