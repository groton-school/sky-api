<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The unique identifier for the custom field category.
 * @property "Constituent"|"Gift"|"Action"|"Education"|"Event"|"Participant"|"Campaign"|"Appeal"|"Fund"|"Package"|"Address"|"Job"|"Membership"|"IndividualRelationship"|"OrganizationRelationship"|"Account"|"Proposal"
 *   $record_type The type of record (e.g., constituent, gift or action) to
 *   which the custom field category applies.
 * @property ?string $description The custom field category description.
 * @property "Text"|"Number"|"Date"|"Currency"|"Boolean"|"Table"|"Constituent"|"FuzzyDate"
 *   $data_type The data type for the custom field category.
 * @property ?int $code_table_id The code table ID for the custom field
 *   category.
 * @property bool $is_required Value to indicate whether the custom field
 *   category is required.
 * @property bool $is_unique Value to indicate whether the custom field
 *   category is unique.
 * @property bool $is_active Value to indicate whether the custom field
 *   category is active.
 * @property ?int $sequence The numeric sequence associated with the custom
 *   field category.
 * @property ?string $code_table The code table associated with the custom
 *   field category.
 *
 * @api
 */
class CustomFieldCategory extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "record_type" => "string",
        "description" => "string",
        "data_type" => "string",
        "code_table_id" => "int",
        "is_required" => "bool",
        "is_unique" => "bool",
        "is_active" => "bool",
        "sequence" => "int",
        "code_table" => "string",
    ];
}
