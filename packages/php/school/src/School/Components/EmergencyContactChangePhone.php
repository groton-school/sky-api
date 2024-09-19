<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Emergency Contact Change Phone Model
 *
 * @property bool $active Active Indicator
 * @property ?string $call_dialer Call dialer
 * @property ?string $first_name The first name of the emergency contact
 * @property ?string $last_name The last name of the emergency contact
 * @property ?string $phone_number Phone number
 * @property ?string $phone_type Phone type
 * @property ?string $relationship The relationship of the emergency contact
 *   to the user
 * @property ?int $sort_order Sort order
 *
 * @api
 */
class EmergencyContactChangePhone extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "active" => "bool",
        "call_dialer" => "string",
        "first_name" => "string",
        "last_name" => "string",
        "phone_number" => "string",
        "phone_type" => "string",
        "relationship" => "string",
        "sort_order" => "int",
    ];
}
