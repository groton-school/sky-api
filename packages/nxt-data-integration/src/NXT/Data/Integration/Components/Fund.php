<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.FUND table in Raiser's Edge.
 *
 * @property ?string $fund_category The fund category.
 * @property ?string $fund_type The fund type.
 * @property ?string $campaign The campaign associated with the fund.
 * @property ?string $default_appeal The default appeal associated with the
 *   fund.
 * @property int $id The immutable system record ID of the fund.
 * @property string $fund_id The string identifier for the fund.
 * @property string $description The fund description.
 * @property ?int $fund_category_id The table entry ID for the fund category
 *   associated with the fund.
 * @property ?int $fund_type_id The table entry ID for the fund type
 *   associated with the fund.
 * @property ?int $campaign_id The system identifier for the campaign
 *   associated with the fund.
 * @property ?string $start_date The start date for the fund.
 * @property ?string $end_date The end date for the fund.
 * @property bool $inactive The active status of the fund; a fund is active if
 *   the current date is after the start date and before the end date.
 * @property ?int $default_appeal_id The ID for the default appeal associated
 *   with the fund.
 * @property ?string $notes The text notes associated with the fund.
 * @property ?float $goal The target amount to raise for the fund.
 * @property bool $restricted Value used to indicate whether the fund is
 *   restricted to specific users.
 *
 * @api
 */
class Fund extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "fund_category" => "string",
        "fund_type" => "string",
        "campaign" => "string",
        "default_appeal" => "string",
        "id" => "int",
        "fund_id" => "string",
        "description" => "string",
        "fund_category_id" => "int",
        "fund_type_id" => "int",
        "campaign_id" => "int",
        "start_date" => "string",
        "end_date" => "string",
        "inactive" => "bool",
        "default_appeal_id" => "int",
        "notes" => "string",
        "goal" => "float",
        "restricted" => "bool",
    ];
}
