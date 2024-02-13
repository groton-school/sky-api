<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Emergency Contact Change Phone Model
 *
 * @property bool $active Active Indicator
 * @property string | null $call_dialer Call dialer
 * @property string | null $first_name The first name of the emergency contact
 * @property string | null $last_name The last name of the emergency contact
 * @property string | null $phone_number Phone number
 * @property string | null $phone_type Phone type
 * @property string | null $relationship The relationship of the emergency
 *   contact to the user
 * @property int | null $sort_order Sort order
 *
 * @api
 */
class EmergencyContactChangePhone extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["active","call_dialer","first_name","last_name","phone_number","phone_type","relationship","sort_order"];
}
