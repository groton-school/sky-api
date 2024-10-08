<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserExtended;
use Blackbaud\SKY\School\Components\UserExtendedCollection;

/**
 * @api
 */
class Extended extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/extended/{user_id}";

    /**
     * Returns a paginated collection of extended user details, limited to
     * 1000 users per page.
     *
     *  Use the last user's ID as the ```marker``` value to return the next
     * set of results.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{base_role_ids: string, marker: int} $params An associative
     *   array
     *     - base_role_ids: Comma-delimited list of base role IDs to get users
     *   for.
     *     - marker: Format - int32. The user's ID to start at to return the
     *   next batch of data. Results will start with the next user in the result
     *   set.
     *
     * @return \Blackbaud\SKY\School\Components\UserExtendedCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): UserExtendedCollection
    {
        assert(isset($params['base_role_ids']), new ArgumentException("Parameter `base_role_ids` is required"));
        assert(isset($params['marker']), new ArgumentException("Parameter `marker` is required"));

        return new UserExtendedCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['base_role_ids','marker']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Returns extended user details for the specified ```user\_id```.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\UserExtended Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): UserExtended
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new UserExtended($this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
