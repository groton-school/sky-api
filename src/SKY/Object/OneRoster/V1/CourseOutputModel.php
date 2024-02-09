<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property CourseModel $course
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class CourseOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["course","statusInfoSet"];
}
