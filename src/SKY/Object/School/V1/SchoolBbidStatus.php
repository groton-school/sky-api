<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property string|null $current_authentication
 * @property int $days_remaining
 * @property string|null $email
 * @property string|null $invalid_message
 * @property string|null $invited
 * @property string|null $name
 * @property int $status_id
 * @property string|null $status
 * @property string|null $username
 * @api
 */
class SchoolBbidStatus extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","current_authentication","days_remaining","email","invalid_message","invited","name","status_id","status","username"];
}
