<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class PhoneRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "phone_type" => "string",
        "index_id" => "int",
        "links" => "\Blackbaud\SKY\School\Components\PhoneTypeLink[]",
        "number" => "string",
        "type_id" => "int",
        "user_id" => "int",
    ];
}
