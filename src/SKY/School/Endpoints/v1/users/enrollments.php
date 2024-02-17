<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserEnrollmentCollection;

/**
 * @api
 */
class enrollments extends BaseEndpoint
{
    /**
     * @var string url
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
     * @param array{school_year: string, school_level_id?: int,
     *   grade_level_id?: int, limit?: int, offset?: int} $params An associative
     *   array
     *     - school_year: The school year label to get enrollments for. The
     *   school year should be formatted like ```2022-2023```
     *     - school_level_id: (Optional) Format - int32. The school level Id
     *   to return enrollments for. Optional.
     *     - grade_level_id: (Optional) Format - int32. The grade level Id to
     *   return enrollments for. Optional.
     *     - limit: (Optional) Format - int32. The number of records to
     *   return.  Defaults to 1000. Maximum is 5000.
     *     - offset: (Optional) Format - int32. The record to start the next
     *   collection on. Defaults to 0.
     *
     * @return \Blackbaud\SKY\School\Objects\UserEnrollmentCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new UserEnrollmentCollection($this->send("get", [], ["school_year" => $params["school_year"],
        "school_level_id" => $params["school_level_id"],
        "grade_level_id" => $params["grade_level_id"],
        "limit" => $params["limit"],
        "offset" => $params["offset"]]));
    }
}
