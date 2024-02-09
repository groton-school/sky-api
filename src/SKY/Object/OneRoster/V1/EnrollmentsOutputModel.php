<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property EnrollmentModel[]|null $enrollments
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class EnrollmentsOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["enrollments","statusInfoSet"];
}
