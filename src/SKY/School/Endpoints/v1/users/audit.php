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
     * ```role_id``` within the dates provided.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param string $role_id Role to return audit information for.
     * @param ?string $start_date (Optional) Format - date-time (as date-time
     *   in RFC3339). The date to begin looking for changes. Must be greater
     *   than 01/01/1990.
     * @param ?string $end_date (Optional) Format - date-time (as date-time in
     *   RFC3339). The date to end looking for changes.  Must be within 1 year
     *   of start_date. Null returns start_date + 7 days.
     *
     * @return \Blackbaud\SKY\School\Components\UserAuditReadCollectionSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(string $role_id, ?string $start_date = null, ?string $end_date = null): UserAuditReadCollection
    {
        assert($role_id !== null, new ArgumentException("Parameter `role_id` is required"));

        return new UserAuditReadCollection($this->send("get", [], ["role_id" => $role_id,
        "start_date" => $start_date,
        "end_date" => $end_date]));
    }
}
