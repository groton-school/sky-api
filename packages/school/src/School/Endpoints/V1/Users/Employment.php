<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\FacultyEmploymentRead;
use Blackbaud\SKY\School\Components\UserEmploymentCollection;
use Blackbaud\SKY\School\Components\UserEmploymentUpdate;

/**
 * @api
 */
class Employment extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/employment";

    /**
     * Returns the employment details for the specified ```user\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\FacultyEmploymentRead Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): FacultyEmploymentRead
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new FacultyEmploymentRead($this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Updates the employment information for a user.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * - SKY API Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\UserEmploymentUpdate
     *   $requestBody
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnUserId(array $params, UserEmploymentUpdate $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }

    /**
     * Returns a paginated collection of users employment details based on
     * base roles, limited to 1000 users per page.
     *
     *  Use the last user's ID as the ```marker``` value to return the next
     * set of results.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * - SKY API Platform Manager
     *
     * @param array{base_role_ids: string, marker: int} $params An associative
     *   array
     *     - base_role_ids: Comma-delimited list of base role IDs to get users
     *   for.
     *     - marker: Format - int32. The user's ID to start at to return the
     *   next batch of data. Results will start with the next user in the result
     *   set.
     *
     * @return \Blackbaud\SKY\School\Components\UserEmploymentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): UserEmploymentCollection
    {
        assert(isset($params['base_role_ids']), new ArgumentException("Parameter `base_role_ids` is required"));
        assert(isset($params['marker']), new ArgumentException("Parameter `marker` is required"));

        return new UserEmploymentCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['base_role_ids','marker']), ARRAY_FILTER_USE_KEY)));
    }
}
