<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id The ID of the phone number to be shared with the user
 * @property int $phone_type_id The phone type ID that the phone number should
 *   be for the user
 *
 * @api
 */
class PhoneShare extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "phone_type_id" => "int",
    ];
}
