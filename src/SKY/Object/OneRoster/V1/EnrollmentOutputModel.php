<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property EnrollmentModel $enrollment
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class EnrollmentOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["enrollment","statusInfoSet"];
}
