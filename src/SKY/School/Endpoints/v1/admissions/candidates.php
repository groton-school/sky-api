<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\CandidateCreate;
use Blackbaud\SKY\School\Components\CandidateReadCollection;

/**
 * @api
 */
class Candidates extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/admissions/candidates";

    /**
     * Returns a collection of admissions candidates.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Admissions Manager
     *
     * - Platform Manager
     *
     * - SKY API Data Sync
     *
     *  NOTE: The following fields have been deprecated and are no longer
     * returned as of 01/01/2023. - school\_decision
     *
     * - school\_decision\_type
     *
     * - candidate\_decision
     *
     * - candidate\_decision\_type
     *
     *  Use the school decision and candidate decision objects instead.
     *
     *  NOTE: The filter for school\_year\_id has been replaced by
     * school\_year.
     *
     *  The school\_year\_id filter has been deprecated and no longer
     * functions as of 01/01/2023.
     *
     * @param ?string $school_year The school year for which to return
     *   results. Corresponds to ```school\_year\_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Default is current year.
     * @param ?string $status_ids One or more comma delimited status Id(s) to
     *   filter results on. Corresponds to ```id``` in the [Status
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/V1AdmissionsStatusGet). Default is no status Id filter.
     * @param ?string $modified_date Format - date-time (as date-time in
     *   RFC3339). The date last modified to filter results to on or after. Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2003-04-21. Default is no modified date filter
     *
     * @return \Blackbaud\SKY\School\Components\CandidateReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?string $school_year, ?string $status_ids, ?string $modified_date): CandidateReadCollection
    {
        assert($school_year !== null, new ArgumentException("Parameter `school_year` is required"));
        assert($status_ids !== null, new ArgumentException("Parameter `status_ids` is required"));
        assert($modified_date !== null, new ArgumentException("Parameter `modified_date` is required"));

        return new CandidateReadCollection($this->send("get", [], ["school_year" => $school_year,
        "status_ids" => $status_ids,
        "modified_date" => $modified_date]));
    }

    /**
     * Creates a new admissions candidate record.
     *
     *  Returns the ID of the newly created candidate.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Admissions Manager
     *
     * - Admissions Staff
     *
     * @param \Blackbaud\SKY\School\Components\CandidateCreate $requestBody
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(CandidateCreate $requestBody): int
    {
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
