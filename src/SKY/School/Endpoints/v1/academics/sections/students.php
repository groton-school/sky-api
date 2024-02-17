<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\sections;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\PostResponse;
use Blackbaud\SKY\School\Objects\StudentCollection;

/**
 * @api
 */
class students extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/students";

    /**
     * Returns a collection of students in the specified ```section_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Teacher
     *
     * @param array{section_id: int} $params An associative array -
     *   section_id: Format - int32. The ID of the section, which can be found
     *   using [Section
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/V1AcademicsSectionsGet).
     *
     * @return \Blackbaud\SKY\School\Objects\StudentCollection
     *
     * @api
     */
    public function getBySection(array $params)
    {
        return new StudentCollection($this->send("get", ["{section_id}" => $params["section_id"]], []));
    }

    /**
     * Adds bulk enrollment data (students and/or teachers) for the specified
     * section(s).
     *
     * Returns True if successful, otherwise false.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @return \Blackbaud\SKY\School\Objects\PostResponse
     *
     * @api
     */
    public function post()
    {
        return new PostResponse($this->send("post", [], []));
    }
}
