<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\CourseOutputModel;
use Blackbaud\SKY\OneRoster\Objects\CoursesOutputModel;

/**
 * @api
 */
class courses extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/courses/{id}";

    /**
     * Returns a collection of courses.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\CoursesOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new CoursesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific course.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the course
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\CourseOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new CourseOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }
}
