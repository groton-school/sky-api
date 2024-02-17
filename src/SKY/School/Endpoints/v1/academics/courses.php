<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\CourseCollection;

/**
 * @api
 */
class courses extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/courses";

    /**
     * Returns a collection of academic courses, filtered by department and/or
     * school level.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * @param array{department_id?: int, level_id?: int} $params An
     *   associative array
     *     - department_id: (Optional) Format - int32. Identifier for a
     *   specific department.
     *     - level_id: (Optional) Format - int32. Identifier for a specific
     *   school level.
     *
     * @return \Blackbaud\SKY\School\Objects\CourseCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new CourseCollection($this->send("get", [], ["department_id" => $params["department_id"],
        "level_id" => $params["level_id"]]));
    }
}
