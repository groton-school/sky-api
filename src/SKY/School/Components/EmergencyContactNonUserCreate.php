<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Used to create a non-user emergency contact
 *
 * @property int $automated_email The value to be used for the automated email
 *   field.  0 = Never, 1 = Every Time, 2 = Emergency Only
 * @property ?string $email The email address for the emergency contact
 * @property int $call_dialer The value to be used for the automated call
 *   dialer field.  0 = Never, 1 = Every Time, 2 = Emergency Only
 * @property ?string $firstname This first name of the emergency contact
 * @property ?string $lastname The last name of the emergency contact
 * @property ?string $phone_number The phone number of the emergency contact
 * @property ?string $phone_type The phone type of the phone number for the
 *   emergency contact
 * @property ?string $relationship The relationship of the emergency contact
 *
 * @api
 */
class EmergencyContactNonUserCreate extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "automated_email",
        "email",
        "call_dialer",
        "firstname",
        "lastname",
        "phone_number",
        "phone_type",
        "relationship",
    ];
}
