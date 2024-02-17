<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\enrollments;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EnrollmentChangesCollection;

/**
 * @api
 */
class changes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/enrollments/changes";

    /**
     * Returns a collection of students with enrollment changes on or after
     * the date parameter.
     *
     * The maximum period of time that can be specified is 30 days from
     * start_date, if end_date is not provided or is greater than 30 days from
     * start_date it will be set to start_date + 30 days.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Schedule Manager
     *
     * - Academic Group Manager
     *
     * @param array{start_date: string, end_date?: string} $params An
     *   associative array
     *     - start_date: Format - date-time (as date-time in RFC3339). The
     *   DateTime of changes to academics enrollments to begin with
     *     - end_date: (Optional) Format - date-time (as date-time in
     *   RFC3339). The DateTime of changes to academics enrollments to end with.

     *
     * @return \Blackbaud\SKY\School\Objects\EnrollmentChangesCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new EnrollmentChangesCollection($this->send("get", [], ["start_date" => $params["start_date"],
        "end_date" => $params["end_date"]]));
    }
}
