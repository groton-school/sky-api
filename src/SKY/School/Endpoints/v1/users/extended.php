<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserExtended;
use Blackbaud\SKY\School\Objects\UserExtendedCollection;

/**
 * @api
 */
class extended extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/extended/{user_id}";

    /**
     * Returns a paginated collection of extended user details, limited to
     * 1000 users per page.
     *
     * Use the last user's ID as the ```marker``` value to return the next set
     * of results.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{base_role_ids: string, marker?: int} $params An
     *   associative array
     *     - base_role_ids: Comma delimited list of base role IDs to get users
     *   for.
     *     - marker: (Optional) Format - int32. The user's ID to start at to
     *   return the next batch of data. Results will start with the next user in
     *   the result set.
     *
     * @return \Blackbaud\SKY\School\Objects\UserExtendedCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new UserExtendedCollection($this->send("get", [], ["base_role_ids" => $params["base_role_ids"],
        "marker" => $params["marker"]]));
    }

    /**
     * Returns extended user details for the specified ```user_id```.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\UserExtended
     *
     * @api
     */
    public function get(array $params)
    {
        return new UserExtended($this->send("get", ["{user_id}" => $params["user_id"]], []));
    }
}
