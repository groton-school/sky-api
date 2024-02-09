<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student condition update
 *
 * @property string|null $date_as_of
 * @property string|null $date_until
 * @property string|null $notes
 * @property MedicalSecurityRole[]|null $role_access
 * @property _int|null $medications
 * @api
 */
class StudentConditionUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["date_as_of","date_until","notes","role_access","medications"];
}
