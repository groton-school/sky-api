<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $id
 * @property int $phone_type_id
 * @api
 */
class PhoneShare extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","phone_type_id"];
}
