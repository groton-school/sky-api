<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\CourseModel[] | null
 *   $courses 
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class CoursesOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["courses","statusInfoSet"];
}
