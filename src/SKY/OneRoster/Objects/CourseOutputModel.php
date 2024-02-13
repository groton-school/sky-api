<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property \GrotonSchool\Blackbaud\SKY\OneRoster\Objects\CourseModel $course
 *   
 * @property GrotonSchool\Blackbaud\SKY\OneRoster\Objects\StatusInfoModel[] |
 *   null $statusInfoSet 
 *
 * @api
 */
class CourseOutputModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["course","statusInfoSet"];
}
