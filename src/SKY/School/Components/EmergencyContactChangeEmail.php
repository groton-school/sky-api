<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Emergency Contact Change Email Model
 *
 * @property bool $active Active Indicator
 * @property ?string $automated_email Automated email type
 * @property ?string $email The email address of a user
 * @property ?string $first_name The first name of the emergency contact
 * @property ?string $last_name The last name of the emergency contact
 * @property ?string $relationship The relationship of the emergency contact
 *   to the user
 * @property ?int $sort_order Sort order
 *
 * @api
 */
class EmergencyContactChangeEmail extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "active" => "bool",
        "automated_email" => "string",
        "email" => "string",
        "first_name" => "string",
        "last_name" => "string",
        "relationship" => "string",
        "sort_order" => "int",
    ];
}
