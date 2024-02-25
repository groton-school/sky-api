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
     * Returns a collection of admissions candidates.<br></br>
     *
     * Requires one of the following roles in the Education Management system:
     *
     * <ul><li>Admissions Manager</li><li>Platform Manager</li><li>SKY API
     * Data Sync</li></ul>
     *
     * NOTE: The following fields have been deprecated and are no longer
     * returned as of 01/01/2023.
     *
     *  <ul><li>school_decision</li><li>school_decision_type</li><li>candidate_decision</li><li>candidate_decision_type</li></ul>

     *
     * Use the school decision and candidate decision objects instead.<br
     * /><br />
     *
     * NOTE: The filter for school_year_id has been replaced by
     * school_year.<br />
     *
     * The school_year_id filter has been deprecated and no longer functions
     * as of 01/01/2023.
     *
     * @param array{school_year: string, status_ids: string, modified_date:
     *   string} $params An associative array
     *     - school_year: The school year for which to return results.
     *   Corresponds to ```school\_year\_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Default is current year.
     *     - status_ids: One or more comma delimited status Id(s) to filter
     *   results on. Corresponds to ```id``` in the [Status
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/V1AdmissionsStatusGet). Default is no status Id filter.
     *     - modified_date: Format - date-time (as date-time in RFC3339). The
     *   date last modified to filter results to on or after. Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2003-04-21. Default is no modified date filter
     *
     * @return \Blackbaud\SKY\School\Components\CandidateReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(array $params): CandidateReadCollection
    {
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));
        assert(isset($params['status_ids']), new ArgumentException("Parameter `status_ids` is required"));
        assert(isset($params['modified_date']), new ArgumentException("Parameter `modified_date` is required"));

        return new CandidateReadCollection($this->send("get", [], ["school_year" => $school_year,
        "status_ids" => $status_ids,
        "modified_date" => $modified_date]));
    }

    /**
     * Creates a new admissions candidate record.<br></br>
     *
     * Returns the ID of the newly created candidate.<br></br>
     *
     * Requires one of the following roles in the Education Management system:
     *
     * <ul><li>Admissions Manager</li><li>Admissions Staff</li></ul>
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
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
