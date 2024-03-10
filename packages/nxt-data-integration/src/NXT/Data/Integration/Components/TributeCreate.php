<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A Tribute record from the dbo.Tribute table in Raiser's Edge.
 *
 * @property int $tribute_type_id The tribute type code ID.
 * @property ?string $description The tribute description.
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate
 *   $start_date
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate
 *   $end_date
 * @property ?string $notes The tribute notes.
 * @property bool $is_active The active status of the tribute.
 * @property int $constituent_record_id The system record ID of the
 *   constituent.
 * @property ?string $import_id The import id of the tribute.
 * @property ?int $default_fund_id The default fund ID.
 *
 * @api
 */
class TributeCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "tribute_type_id" => "int",
        "description" => "string",
        "start_date" => "\Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate",
        "end_date" => "\Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate",
        "notes" => "string",
        "is_active" => "bool",
        "constituent_record_id" => "int",
        "import_id" => "string",
        "default_fund_id" => "int",
    ];
}
