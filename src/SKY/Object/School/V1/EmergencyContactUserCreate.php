<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Used to create an emergency contact for a user.
 *
 * @property int $automated_email
 * @property int $call_dialer
 * @property string|null $email
 * @property string|null $phone_number
 * @api
 */
class EmergencyContactUserCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["automated_email","call_dialer","email","phone_number"];
}
