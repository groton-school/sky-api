<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\CourseCollection;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Courses\Customfields;

/**
 * Routing class for the subnamespace `Courses`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Courses\Customfields
 *   $customfields Routing class for the subnamespace `Customfields`
 *
 * @api
 */
class Courses extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/courses";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "customfields" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Courses\Customfields",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Courses\Customfields
     *   $_customfields Routing class for the subnamespace `Customfields`
     */
    protected ?Customfields $_customfields = null;

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
     * @param array{department_id: int, level_id: int} $params An associative
     *   array
     *     - department_id: Format - int32. Identifier for a specific
     *   department.
     *     - level_id: Format - int32. Identifier for a specific school level.
     *
     * @return \Blackbaud\SKY\School\Components\CourseCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): CourseCollection
    {
        assert(isset($params['department_id']), new ArgumentException("Parameter `department_id` is required"));
        assert(isset($params['level_id']), new ArgumentException("Parameter `level_id` is required"));

        return new CourseCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['department_id','level_id']), ARRAY_FILTER_USE_KEY)));
    }
}
