<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\OccupationCreate;
use Blackbaud\SKY\School\Components\OccupationReadCollection;
use Blackbaud\SKY\School\Components\OccupationUpdate;

/**
 * @api
 */
class Occupations extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/occupations/{occupation_id}";

    /**
     * Returns a collection of occupations for the specified ```user_id```.
     * <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>SKY API Data Sync</li></ul>
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\OccupationReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUser(array $params): OccupationReadCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new OccupationReadCollection($this->send("get", ["{user_id}" => $params['user_id']], []));
    }

    /**
     * Creates an occupation record for the specified ```user_id```.<br />
     *
     * Returns the ID of the occupation created. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card
     * Manager</li></ul>
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\OccupationCreate $requestBody
     *   The occupation information to be created.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postByUser(array $params, OccupationCreate $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $params['user_id']], [], $requestBody);
    }

    /**
     * Deletes an occupation entry for a user.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card
     * Manager</li></ul>
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{user_id: int, occupation_id: int, current: bool} $params
     *   An associative array
     *     - user_id: Format - int32. The ID of the user.
     *     - occupation_id: Format - int32. The ID of the occupation.
     *     - current: Current Employment Status
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByUser(array $params): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['occupation_id']), new ArgumentException("Parameter `occupation_id` is required"));
        assert(isset($params['current']), new ArgumentException("Parameter `current` is required"));

        return $this->send("delete", ["{user_id}" => $params['user_id'],
        "{occupation_id}" => $params['occupation_id']], ["current" => $current]);
    }

    /**
     * Updates an occupation entry for a user.<br />
     *
     * Returns the ID of the occupation updated. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>SKY API Data Sync</li><li>Platform Manager</li><li>Contact Card
     * Manager</li></ul>
     *
     * @param array{user_id: int, occupation_id: int} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the user.
     *     - occupation_id: Format - int32. The ID of the occupation.
     * @param \Blackbaud\SKY\School\Components\OccupationUpdate $requestBody
     *   The occupation information to be updated.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByUser(array $params, OccupationUpdate $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['occupation_id']), new ArgumentException("Parameter `occupation_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $params['user_id'],
        "{occupation_id}" => $params['occupation_id']], [], $requestBody);
    }
}
