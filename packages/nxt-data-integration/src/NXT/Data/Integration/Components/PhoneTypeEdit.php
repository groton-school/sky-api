<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * RE7 Phone type record base class from the dbo.TableEntries table in
 * Raiser's Edge.
 *
 * @property bool $is_active The active status of the phone type.
 * @property string $description The phone type description.
 * @property "TelephoneNumber"|"FaxNumber"|"EmailAddress"|"WebAddressUrl"|"Other"
 *   $type The phone number type.
 * @property "None"|"Mask1"|"Mask2"|"Mask3"|"Mask4"|"Mask5"|"Mask6"|"Mask7"|"Mask8"|"Mask9"|"Mask10"|"Mask11"
 *   $format The phone number format.
 *
 * @api
 */
class PhoneTypeEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "is_active" => "bool",
        "description" => "string",
        "type" => "string",
        "format" => "string",
    ];
}
