<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\CourseCollection;

/**
 * @api
 */
class Courses extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/courses";

    /**
     * Returns a collection of academic courses, filtered by department and/or
     * school level.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * @param ?int $department_id Format - int32. Identifier for a specific
     *   department.
     * @param ?int $level_id Format - int32. Identifier for a specific school
     *   level.
     *
     * @return \Blackbaud\SKY\School\Components\CourseCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?int $department_id, ?int $level_id): CourseCollection
    {
        assert($department_id !== null, new ArgumentException("Parameter `department_id` is required"));
        assert($level_id !== null, new ArgumentException("Parameter `level_id` is required"));

        return new CourseCollection($this->send("get", [], ["department_id" => $department_id,
        "level_id" => $level_id]));
    }
}
