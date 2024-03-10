<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListContactEmailAddress
 *
 * @property string $id The id.
 * @property string $contact_info The contact information.
 * @property string $type The type.
 * @property string $is_primary The primary.
 * @property string $do_not_contact The do not contact.
 * @property bool $is_former Indicates whether isformer.
 * @property string $start_date The start date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $end_date The end date.Uses the format YYYY-MM-DD. An
 *   example date: *2019-11-21*.
 * @property string $imagekey The imagekey.
 * @property bool $invalid_email Indicates whether invalid email.
 *
 * @api
 */
class ConstituentContactListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "contact_info" => "string",
        "type" => "string",
        "is_primary" => "string",
        "do_not_contact" => "string",
        "is_former" => "bool",
        "start_date" => "string",
        "end_date" => "string",
        "imagekey" => "string",
        "invalid_email" => "bool",
    ];
}
