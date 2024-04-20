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
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/bbidstatus";

    /**
     * Returns a paginated collection of users education management BBID
     * status, limited to 1000 users per page.
     *
     *  Use the last user's ID as the ```marker``` value to return the next
     * set of results.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * @param array{base_role_ids: string, marker: int} $params An associative
     *   array
     *     - base_role_ids: Comma delimited list of base role IDs to get users
     *   for.
     *     - marker: Format - int32. The user's ID to start at to return the
     *   next batch of data. Results will start with the next user in the result
     *   set.
     *
     * @return \Blackbaud\SKY\School\Components\SchoolBbidStatusCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): SchoolBbidStatusCollection
    {
        assert(isset($params['base_role_ids']), new ArgumentException("Parameter `base_role_ids` is required"));
        assert(isset($params['marker']), new ArgumentException("Parameter `marker` is required"));

        return new SchoolBbidStatusCollection($this->send("get", [], ["base_role_ids" => $params['base_role_ids'],
            "marker" => $params['marker']]));
    }
}
