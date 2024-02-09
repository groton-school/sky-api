<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student immunization
 *
 * @property string $immunization_type
 * @property string|null $immunization_date
 * @api
 */
class StudentImmunization extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["immunization_type","immunization_date"];
}
