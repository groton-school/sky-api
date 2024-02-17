<?php

namespace Blackbaud\SKY\School\Endpoints\v1\admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\CandidateReadCollection;

/**
 * @api
 */
class candidates extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/admissions/candidates";

    /**
     * Returns a collection of admissions candidates.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Admissions Manager
     *
     * - Platform Manager
     *
     * - SKY API Data Sync
     *
     * NOTE: The following fields have been deprecated and are no longer
     * returned as of 01/01/2023. - school_decision
     *
     * - school_decision_type
     *
     * - candidate_decision
     *
     * - candidate_decision_type
     *
     * Use the school decision and candidate decision objects instead.
     *
     *  NOTE: The filter for school_year_id has been replaced by school_year.
     *
     * The school_year_id filter has been deprecated and no longer functions
     * as of 01/01/2023.
     *
     * @param array{school_year?: string, status_ids?: string, modified_date?:
     *   string} $params An associative array - school_year: (Optional) The
     *   school year for which to return results. Corresponds to
     *   ```school_year_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Default is current year. - status_ids: (Optional) One or more comma delimited status Id(s) to filter results on. Corresponds to ```id``` in the [Status list](https://developer.sky.blackbaud.com/docs/services/school/operations/V1AdmissionsStatusGet). Default is no status Id filter. - modified_date: (Optional) Format - date-time (as date-time in RFC3339). The date last modified to filter results to on or after. Use [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format: 2003-04-21. Default is no modified date filter
     *
     * @return \Blackbaud\SKY\School\Objects\CandidateReadCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new CandidateReadCollection($this->send("get", [], ["school_year" => $params["school_year"],
        "status_ids" => $params["status_ids"],
        "modified_date" => $params["modified_date"]]));
    }

    /**
     * Creates a new admissions candidate record.
     *
     * Returns the ID of the newly created candidate.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Admissions Manager
     *
     * - Admissions Staff
     *
     * @return \int
     *
     * @api
     */
    public function post()
    {
        return $this->send("post", [], []);
    }
}
