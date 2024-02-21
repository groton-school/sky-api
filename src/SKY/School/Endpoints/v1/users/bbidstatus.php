<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\SchoolBbidStatusCollection;

/**
 * @api
 */
class Bbidstatus extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/bbidstatus";

    /**
     * Returns a paginated collection of users education management BBID
     * status, limited to 1000 users per page.
     *
     * Use the last user's ID as the ```marker``` value to return the next set
     * of results.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * @param string $base_role_ids Comma delimited list of base role IDs to
     *   get users for.
     * @param ?int $marker (Optional) Format - int32. The user's ID to start
     *   at to return the next batch of data. Results will start with the next
     *   user in the result set.
     *
     * @return \Blackbaud\SKY\School\Components\SchoolBbidStatusCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(string $base_role_ids, ?int $marker = null): SchoolBbidStatusCollection
    {
        assert($base_role_ids !== null, new ArgumentException("Parameter `base_role_ids` is required"));

        return new SchoolBbidStatusCollection($this->send("get", [], ["base_role_ids" => $base_role_ids,
        "marker" => $marker]));
    }
}
