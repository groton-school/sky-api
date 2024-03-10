<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A Code Table record from the dbo.Tribute table in Raiser's Edge.
 *
 * @property int $id The tribute ID.
 * @property int $tribute_type_id The tribute type code ID.
 * @property ?string $tribute_type_name The tribute type name
 * @property ?string $description The tribute description.
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate
 *   $start_date
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate
 *   $end_date
 * @property ?string $notes The tribute notes.
 * @property bool $is_active The active status of the tribute.
 * @property ?int $sequence The sequence of the tribute.
 * @property int $constituent_record_id The system record ID of the
 *   constituent.
 * @property ?int $last_changed_by_id The ID of the user who last changed the
 *   tribute.
 * @property ?string $date_added The date that the tribute was added.
 * @property ?string $date_changed The date that the tribute was changed.
 * @property ?string $import_id The import id of the tribute.
 * @property ?int $added_by_id The ID of the user who added the tribute.
 * @property ?int $default_fund_id The default fund ID.
 *
 * @api
 */
class Tribute extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "tribute_type_id" => "int",
        "tribute_type_name" => "string",
        "description" => "string",
        "start_date" => "\Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate",
        "end_date" => "\Blackbaud\SKY\NXT\Data\Integration\Components\FuzzyDate",
        "notes" => "string",
        "is_active" => "bool",
        "sequence" => "int",
        "constituent_record_id" => "int",
        "last_changed_by_id" => "int",
        "date_added" => "string",
        "date_changed" => "string",
        "import_id" => "string",
        "added_by_id" => "int",
        "default_fund_id" => "int",
    ];
}
