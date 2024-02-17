<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\SchoolBbidStatusCollection;

/**
 * @api
 */
class bbidstatus extends BaseEndpoint
{
    /**
     * @var string url
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
     * @param array{base_role_ids: string, marker?: int} $params An
     *   associative array
     *     - base_role_ids: Comma delimited list of base role IDs to get users
     *   for.
     *     - marker: (Optional) Format - int32. The user's ID to start at to
     *   return the next batch of data. Results will start with the next user in
     *   the result set.
     *
     * @return \Blackbaud\SKY\School\Objects\SchoolBbidStatusCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new SchoolBbidStatusCollection($this->send("get", [], ["base_role_ids" => $params["base_role_ids"],
        "marker" => $params["marker"]]));
    }
}
