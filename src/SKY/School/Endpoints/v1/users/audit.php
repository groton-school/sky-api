<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserAuditReadCollection;

/**
 * @api
 */
class Audit extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/audit";

    /**
     * Returns a collection of audit information based on the specified
     * ```role\_id``` within the dates provided.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{role_id: string, start_date: string, end_date: string}
     *   $params An associative array
     *     - role_id: Role to return audit information for.
     *     - start_date: Format - date-time (as date-time in RFC3339). The
     *   date to begin looking for changes. Must be greater than 01/01/1990.
     *     - end_date: Format - date-time (as date-time in RFC3339). The date
     *   to end looking for changes. Must be within 1 year of start\_date. Null
     *   returns start\_date + 7 days.
     *
     * @return \Blackbaud\SKY\School\Components\UserAuditReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterByBy(array $params): UserAuditReadCollection
    {
        assert(isset($params['role_id']), new ArgumentException("Parameter `role_id` is required"));
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));

        return new UserAuditReadCollection($this->send("get", [], ["role_id" => $params['role_id'],
        "start_date" => $params['start_date'],
        "end_date" => $params['end_date']]));
    }
}
