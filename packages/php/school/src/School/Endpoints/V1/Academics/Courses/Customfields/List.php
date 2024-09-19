<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Courses\Customfields;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;

/**
 * @api
 */
class List_ extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/courses/{course_id}/customfields/list";

    /**
     * Add custom field data to a course
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic group manager
     *
     * - Platform Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{course_id: int} $params An associative array
     *     - course_id: Format - int32. The ID of the course.
     * @param \Blackbaud\SKY\School\Components\OfferingAdminCustomFieldCreate[]
     *   $requestBody Object that describes the list of custom fields that will
     *   be created for the course.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToCourseId(array $params, array $requestBody): int
    {
        assert(isset($params['course_id']), new ArgumentException("Parameter `course_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['course_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }

    /**
     * Update the custom field data for a course
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic group manager
     *
     * - Platform Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{course_id: int} $params An associative array
     *     - course_id: Format - int32. The ID of the course.
     * @param \Blackbaud\SKY\School\Components\OfferingAdminCustomFieldUpdate[]
     *   $requestBody Object that describes the list of custom fields that will
     *   be updated for the course.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnCourseId(array $params, array $requestBody): int
    {
        assert(isset($params['course_id']), new ArgumentException("Parameter `course_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['course_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
