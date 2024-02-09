<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Emergency Contact Change Email Model
 *
 * @property bool $active
 * @property string|null $automated_email
 * @property string|null $email
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $relationship
 * @property int|null $sort_order
 * @api
 */
class EmergencyContactChangeEmail extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["active","automated_email","email","first_name","last_name","relationship","sort_order"];
}
