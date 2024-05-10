<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * CreateBatch
 *
 * @property string $batch_number The batch number.
 * @property string $description The description.
 * @property string $owner_id The owner.
 * @property string $batch_template_id The batch template.
 * @property string $originating_batch_id The originating batch ID.
 * @property int $projected_number_of_records The projected #.
 * @property float $projected_total_amount The projected amount.
 * @property bool $display_total_amount Indicates whether display total
 *   amount. Read-only in the SOAP API.
 * @property bool $create_custom_batch Indicates whether create custom batch.
 * @property bool $can_change_batch_numbers Indicates whether can change batch
 *   numbers. Read-only in the SOAP API.
 * @property bool $auto_save_on_row_change Indicates whether enable auto-save.
 * @property bool $override_batch_number Indicates whether override.
 * @property bool $can_edit_field_options Indicates whether can edit field
 *   options. Read-only in the SOAP API.
 * @property bool $skip_test_for_web_shell Indicates whether ignore webshell
 *   conversion status. Read-only in the SOAP API.
 * @property float $automatch_threshold The auto-match percentage.
 * @property float $overall_match_threshold The match percentage.
 * @property string $specific_batch_type_id The filter to only a specified
 *   batch type. Read-only in the SOAP API.
 * @property bool $check_for_duplicates Indicates whether check for duplicate
 *   records.
 * @property bool $disable_add_new_row Indicates whether disable add new rows.
 * @property bool $skip_batch_assignment_alert Indicates whether skip batch
 *   assignment alert.
 *
 * @api
 */
class NewBatch extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "batch_number" => "string",
        "description" => "string",
        "owner_id" => "string",
        "batch_template_id" => "string",
        "originating_batch_id" => "string",
        "projected_number_of_records" => "int",
        "projected_total_amount" => "float",
        "display_total_amount" => "bool",
        "create_custom_batch" => "bool",
        "can_change_batch_numbers" => "bool",
        "auto_save_on_row_change" => "bool",
        "override_batch_number" => "bool",
        "can_edit_field_options" => "bool",
        "skip_test_for_web_shell" => "bool",
        "automatch_threshold" => "float",
        "overall_match_threshold" => "float",
        "specific_batch_type_id" => "string",
        "check_for_duplicates" => "bool",
        "disable_add_new_row" => "bool",
        "skip_batch_assignment_alert" => "bool",
    ];
}
