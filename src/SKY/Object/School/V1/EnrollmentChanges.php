<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Enrollment Changes Model
 *
 * @property int|null $id
 * @property string|null $preferred_name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property EnrollmentChangeAudit[]|null $changes
 * @api
 */
class EnrollmentChanges extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","preferred_name","first_name","last_name","changes"];
}
