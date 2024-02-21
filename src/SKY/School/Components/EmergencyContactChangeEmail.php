<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class EmergencyContactChangeEmail extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "active",
        "automated_email",
        "email",
        "first_name",
        "last_name",
        "relationship",
        "sort_order",
    ];
}
