<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserEnrollmentCollection;

/**
 * @api
 */
class Enrollments extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/enrollments";

    /**
     * Returns a collection of users and their enrollments for a single school
     * year.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Admissions manager
     *
     * - Platform manager
     *
     * - SKY API Data Sync
     *
     * @param array{school_year: string, school_level_id: int, grade_level_id:
     *   int, limit?: int, offset?: int} $params An associative array
     *     - school_year: The school year label to get enrollments for. The
     *   school year should be formatted like ```2022-2023```
     *     - school_level_id: Format - int32. The school level ID to return
     *   enrollments for. Optional.
     *     - grade_level_id: Format - int32. The grade level ID to return
     *   enrollments for. Optional.
     *     - limit: Format - int32. The number of records to return. Defaults
     *   to 1000. Maximum is 5000.
     *     - offset: Format - int32. The record to start the next collection
     *   on. Defaults to 0.
     *
     * @return \Blackbaud\SKY\School\Components\UserEnrollmentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): UserEnrollmentCollection
    {
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));
        assert(isset($params['school_level_id']), new ArgumentException("Parameter `school_level_id` is required"));
        assert(isset($params['grade_level_id']), new ArgumentException("Parameter `grade_level_id` is required"));

        return new UserEnrollmentCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['school_year','school_level_id','grade_level_id','limit','offset']), ARRAY_FILTER_USE_KEY)));
    }
}
