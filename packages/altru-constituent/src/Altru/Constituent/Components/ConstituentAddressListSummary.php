<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListConstituentAddress
 *
 * @property string $id The id.
 * @property string $contact_info The contact information.
 * @property string $type The type.
 * @property string $primary The primary.
 * @property string $do_not_contact The do not contact.
 * @property bool $confidential Indicates whether confidential.
 * @property bool $former Indicates whether isformer.
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property bool $geocoded Indicates whether isgeocoded.
 * @property bool $pending_geocode Indicates whether pendinggeocode.
 * @property bool $invalid_geocode Indicates whether invalidgeocode.
 * @property string $map_context_id The mapcontextid.
 * @property string $image_key The imagekey.
 *
 * @api
 */
class ConstituentAddressListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "contact_info" => "string",
        "type" => "string",
        "primary" => "string",
        "do_not_contact" => "string",
        "confidential" => "bool",
        "former" => "bool",
        "start_date" => "string",
        "end_date" => "string",
        "geocoded" => "bool",
        "pending_geocode" => "bool",
        "invalid_geocode" => "bool",
        "map_context_id" => "string",
        "image_key" => "string",
    ];
}
