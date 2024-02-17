<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserAuditReadCollection;

/**
 * @api
 */
class audit extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/audit";

    /**
     * Returns a collection of audit information based on the specified
     * ```role_id``` within the dates provided.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{role_id: string, start_date?: string, end_date?: string}
     *   $params An associative array
     *     - role_id: Role to return audit information for.
     *     - start_date: (Optional) Format - date-time (as date-time in
     *   RFC3339). The date to begin looking for changes. Must be greater than
     *   01/01/1990.
     *     - end_date: (Optional) Format - date-time (as date-time in
     *   RFC3339). The date to end looking for changes.  Must be within 1 year
     *   of start_date. Null returns start_date + 7 days.
     *
     * @return \Blackbaud\SKY\School\Objects\UserAuditReadCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new UserAuditReadCollection($this->send("get", [], ["role_id" => $params["role_id"],
        "start_date" => $params["start_date"],
        "end_date" => $params["end_date"]]));
    }
}
