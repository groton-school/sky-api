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
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/enrollments";

    /**
     * Returns a collection of users and their enrollments for a single school
     * year.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Admissions manager
     *
     * - Platform manager
     *
     * - SKY API Data Sync
     *
     * @param string $school_year The school year label to get enrollments
     *   for. The school year should be formatted like ```2022-2023```
     * @param ?int $school_level_id (Optional) Format - int32. The school
     *   level Id to return enrollments for. Optional.
     * @param ?int $grade_level_id (Optional) Format - int32. The grade level
     *   Id to return enrollments for. Optional.
     * @param ?int $limit (Optional) Format - int32. The number of records to
     *   return.  Defaults to 1000. Maximum is 5000.
     * @param ?int $offset (Optional) Format - int32. The record to start the
     *   next collection on. Defaults to 0.
     *
     * @return \Blackbaud\SKY\School\Components\UserEnrollmentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(string $school_year, ?int $school_level_id = null, ?int $grade_level_id = null, ?int $limit = null, ?int $offset = null): UserEnrollmentCollection
    {
        assert($school_year !== null, new ArgumentException("Parameter `school_year` is required"));

        return new UserEnrollmentCollection($this->send("get", [], ["school_year" => $school_year,
        "school_level_id" => $school_level_id,
        "grade_level_id" => $grade_level_id,
        "limit" => $limit,
        "offset" => $offset]));
    }
}
