<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property \Blackbaud\SKY\OneRoster\Components\CourseModel $course
 * @property ?\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]
 *   $statusInfoSet
 *
 * @api
 */
class CourseOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "course" => "\Blackbaud\SKY\OneRoster\Components\CourseModel",
        "statusInfoSet" => "\Blackbaud\SKY\OneRoster\Components\StatusInfoModel[]",
    ];
}
