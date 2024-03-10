<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Sections;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\BulkEnrollment;
use Blackbaud\SKY\School\Components\PostResponse;
use Blackbaud\SKY\School\Components\StudentCollection;

/**
 * @api
 */
class Students extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/students";

    /**
     * Returns a collection of students in the specified ```section\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Teacher
     *
     * @param array{section_id: int} $params An associative array
     *     - section_id: Format - int32. The ID of the section, which can be
     *   found using [Section
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/V1AcademicsSectionsGet).
     *
     * @return \Blackbaud\SKY\School\Components\StudentCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getBySectionId(array $params): StudentCollection
    {
        assert(isset($params['section_id']), new ArgumentException("Parameter `section_id` is required"));

        return new StudentCollection($this->send("get", ["{section_id}" => $params['section_id']], []));
    }

    /**
     * Adds bulk enrollment data (students and/or teachers) for the specified
     * section(s).
     *
     *  Returns True if successful, otherwise false.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param \Blackbaud\SKY\School\Components\BulkEnrollment $requestBody
     *   Defines which users (students and/or teachers) should be added to which
     *   offerings (via ```section\_id``` and duration ```id```)
     *
     * @return \Blackbaud\SKY\School\Components\PostResponse Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(BulkEnrollment $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
