<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * An object for visa information
 *
 * @property string|null $number
 * @property IdDescriptorField $status
 * @property IdDescriptorField $type
 * @property string|null $issue_date
 * @property string|null $expire_date
 * @api
 */
class UserVisa extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","status","type","issue_date","expire_date"];
}
