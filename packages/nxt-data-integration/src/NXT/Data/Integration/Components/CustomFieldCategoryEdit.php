<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id
 * @property "Constituent"|"Gift"|"Action"|"Education"|"Event"|"Participant"|"Campaign"|"Appeal"|"Fund"|"Package"|"Address"|"Job"|"Membership"|"IndividualRelationship"|"OrganizationRelationship"|"Account"|"Proposal"
 *   $record_type
 * @property "Text"|"Number"|"Date"|"Currency"|"Boolean"|"Table"|"Constituent"|"FuzzyDate"
 *   $data_type
 * @property ?int $code_table_id
 * @property string $description The custom field category description.
 * @property bool $is_required Value to indicate whether the custom field
 *   category is required.
 * @property bool $is_unique Value to indicate whether the custom field
 *   category is unique.
 * @property bool $is_active Value to indicate whether the custom field
 *   category is active.
 * @property ?int $sequence The numeric sequence associated with the custom
 *   field category.
 *
 * @api
 */
class CustomFieldCategoryEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "record_type" => "string",
        "data_type" => "string",
        "code_table_id" => "int",
        "description" => "string",
        "is_required" => "bool",
        "is_unique" => "bool",
        "is_active" => "bool",
        "sequence" => "int",
    ];
}
