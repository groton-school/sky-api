<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EnrollmentCollection;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments\Changes;

/**
 * Routing class for the subnamespace `Enrollments`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments\Changes
 *   $changes
 *
 * @api
 */
class Enrollments extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/enrollments/{user_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "changes" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments\Changes",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments\Changes
     *   $_changes
     */
    protected ?Changes $_changes = null;

    /**
     * Returns a collection of course sections in which the provided student
     * is enrolled.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param array{user_id: int, school_year: string} $params An associative
     *   array
     *     - user_id: Format - int32. User identifier.
     *     - school_year: The school year to filter the collection of sections
     *   by. Corresponds to ```school\_year\_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Components\EnrollmentCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByUserId(array $params): EnrollmentCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));

        return new EnrollmentCollection($this->send("get", ["user_id" => $params['user_id']], ["school_year" => $params['school_year']]));
    }
}
