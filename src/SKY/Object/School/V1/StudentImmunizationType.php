<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student immunization type
 *
 * @property int|null $id
 * @property string|null $description
 * @property bool|null $required
 * @api
 */
class StudentImmunizationType extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","description","required"];
}
