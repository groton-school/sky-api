<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\CourseOutputModel;
use Blackbaud\SKY\OneRoster\Components\CoursesOutputModel;

/**
 * @api
 */
class Courses extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/courses/{id}";

    /**
     * Returns a collection of courses.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\CoursesOutputModel OK - It
     *   was possible to read the collection.
     */
    public function getAll(): CoursesOutputModel
    {
        return new CoursesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific course.
     *
     * @param string $id sourcedId for the course
     *
     * @return \Blackbaud\SKY\OneRoster\Components\CourseOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function get(string $id): CourseOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new CourseOutputModel($this->send("get", ["{id}" => $id], []));
    }
}
