<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * PhoneAdd Model
 *
 * @property string|null $number
 * @property int|null $type_id
 * @api
 */
class PhoneAdd extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["number","type_id"];
}
