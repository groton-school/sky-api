<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * PhoneRead Model
 *
 * @property int $id The ID of the phone number
 * @property ?string $phone_type The 'Type' of the phone number
 * @property ?int $index_id The Index ID of the phone number
 * @property ?\Blackbaud\SKY\School\Components\PhoneTypeLink[] $links Returns
 *   each instance of a phone type for each relationship to the user
 * @property ?string $number The phone number
 * @property ?int $type_id The type ID of a phone number; the type ID
 *   corresponds with the type of phone number (ex. Cell, Work, Home)
 * @property ?int $user_id The ID of the user the phone number belongs to
 *
 * @api
 */
class PhoneRead extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "phone_type",
        "index_id",
        "links",
        "number",
        "type_id",
        "user_id",
    ];
}
