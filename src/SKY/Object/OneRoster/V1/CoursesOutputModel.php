<?php

namespace GrotonSchool\Blackbaud\SKY\Object\OneRoster\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property CourseModel[]|null $courses
 * @property StatusInfoModel[]|null $statusInfoSet
 * @api
 */
class CoursesOutputModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["courses","statusInfoSet"];
}
