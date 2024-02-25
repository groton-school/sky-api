<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EnrollmentChangesCollection;

/**
 * @api
 */
class Changes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/enrollments/changes";

    /**
     * Returns a collection of students with enrollment changes on or after
     * the date parameter.<br />
     *
     * The maximum period of time that can be specified is 30 days from
     * start_date, if end_date is not provided or is greater than 30 days from
     * start_date it will be set to start_date + 30 days.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Schedule Manager</li><li>Academic Group Manager</li></ul>
     *
     * @param array{start_date: string, end_date: string} $params An
     *   associative array
     *     - start_date: Format - date-time (as date-time in RFC3339). The
     *   DateTime of changes to academics enrollments to begin with
     *     - end_date: Format - date-time (as date-time in RFC3339). The
     *   DateTime of changes to academics enrollments to end with.
     *
     * @return \Blackbaud\SKY\School\Components\EnrollmentChangesCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(array $params): EnrollmentChangesCollection
    {
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));

        return new EnrollmentChangesCollection($this->send("get", [], ["start_date" => $start_date,
        "end_date" => $end_date]));
    }
}
