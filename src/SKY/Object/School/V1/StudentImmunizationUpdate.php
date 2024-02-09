<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student medication
 *
 * @property int $user_id
 * @property StudentImmunization[] $immunizations
 * @api
 */
class StudentImmunizationUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","immunizations"];
}
