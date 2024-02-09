<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student medication
 *
 * @property int $id
 * @property StudentImmunizationType $immunization_type Student immunization type
 * @property bool|null $is_complete
 * @property string|null $immunization_date
 * @api
 */
class StudentImmunizationRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","immunization_type","is_complete","immunization_date"];
}
