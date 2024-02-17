<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserExtendedCollection;

/**
 * @api
 */
class changed extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/changed";

    /**
     * Returns a paginated collection of users that have been created or
     * modified within the specified timeframe. The timeframe is from the
     * start_date to the start_date plus seven days.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{base_role_ids: string, start_date: string} $params An
     *   associative array - base_role_ids: Comma delimited list of base role
     *   IDs to get users for. - start_date: Format - date-time (as date-time in
     *   RFC3339). The date to begin looking for changes. Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2003-04-21.
     *
     * @return \Blackbaud\SKY\School\Objects\UserExtendedCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new UserExtendedCollection($this->send("get", [], ["base_role_ids" => $params["base_role_ids"],
        "start_date" => $params["start_date"]]));
    }
}
