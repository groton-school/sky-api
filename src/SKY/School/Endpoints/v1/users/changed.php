<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserExtendedCollection;

/**
 * @api
 */
class Changed extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/changed";

    /**
     * Returns a paginated collection of users that have been created or
     * modified within the specified timeframe. The timeframe is from the
     * start\_date to the start\_date plus seven days.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param string $base_role_ids Comma delimited list of base role IDs to
     *   get users for.
     * @param string $start_date Format - date-time (as date-time in RFC3339).
     *   The date to begin looking for changes. Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2003-04-21.
     *
     * @return \Blackbaud\SKY\School\Components\UserExtendedCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(string $base_role_ids, string $start_date): UserExtendedCollection
    {
        assert($base_role_ids !== null, new ArgumentException("Parameter `base_role_ids` is required"));
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));

        return new UserExtendedCollection($this->send("get", [], ["base_role_ids" => $base_role_ids,
        "start_date" => $start_date]));
    }
}
