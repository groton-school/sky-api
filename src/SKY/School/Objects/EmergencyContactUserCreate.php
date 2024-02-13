<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Used to create an emergency contact for a user.
 *
 * @property int $automated_email The value to be used for the automated email
 *   field.  0 = Never, 1 = Every Time, 2 = Emergency Only
 * @property int $call_dialer The value to be used for the automated call
 *   dialer field.  0 = Never, 1 = Every Time, 2 = Emergency Only
 * @property string | null $email The email address for the emergency contact
 * @property string | null $phone_number The phone number for the emergency
 *   contact
 *
 * @api
 */
class EmergencyContactUserCreate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["automated_email","call_dialer","email","phone_number"];
}
