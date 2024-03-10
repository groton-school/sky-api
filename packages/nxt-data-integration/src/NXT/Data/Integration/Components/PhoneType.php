<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.TableEntries table in Raiser's Edge for a Phone Type.
 *
 * @property ?int $sequence The sequence associated with the phone type.
 * @property bool $is_system_entry The value indicating whether the phone type
 *   is a system entry.
 * @property ?string $date_added The date that the phone type was added.
 * @property ?string $date_changed The date that the phone type was changed.
 * @property ?int $added_by_id The ID of the user who added the phone type.
 * @property ?int $last_changed_by_id The ID of the user who last changed the
 *   phone type.
 * @property ?string $format_mask The phone format.
 * @property int $table_entries_id The ID for the phone type in the
 *   dbo.TableEntries table.
 * @property bool $is_active The active status of the phone type.
 * @property string $description The phone type description.
 * @property "TelephoneNumber"|"FaxNumber"|"EmailAddress"|"WebAddressUrl"|"Other"
 *   $type The phone number type.
 * @property "None"|"Mask1"|"Mask2"|"Mask3"|"Mask4"|"Mask5"|"Mask6"|"Mask7"|"Mask8"|"Mask9"|"Mask10"|"Mask11"
 *   $format The phone number format.
 *
 * @api
 */
class PhoneType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "sequence" => "int",
        "is_system_entry" => "bool",
        "date_added" => "string",
        "date_changed" => "string",
        "added_by_id" => "int",
        "last_changed_by_id" => "int",
        "format_mask" => "string",
        "table_entries_id" => "int",
        "is_active" => "bool",
        "description" => "string",
        "type" => "string",
        "format" => "string",
    ];
}
