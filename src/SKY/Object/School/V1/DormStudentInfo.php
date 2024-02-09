<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property string|null $grad_year
 * @api
 */
class DormStudentInfo extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["grad_year"];
}
