<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\OccupationReadCollection;

/**
 * @api
 */
class occupations extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/occupations/{occupation_id}";

    /**
     * Returns a collection of occupations for the specified ```user_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\OccupationReadCollection
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return new OccupationReadCollection($this->send("get", ["{user_id}" => $params["user_id"]], []));
    }

    /**
     * Creates an occupation record for the specified ```user_id```.
     *
     * Returns the ID of the occupation created.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \int
     *
     * @api
     */
    public function postByUser(array $params)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], []);
    }

    /**
     * Deletes an occupation entry for a user.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{user_id: int, occupation_id: int, current?: bool} $params
     *   An associative array
     *     - user_id: Format - int32. The ID of the user.
     *     - occupation_id: Format - int32. The ID of the occupation.
     *     - current: (Optional) Current Employment Status
     *
     * @return \int
     *
     * @api
     */
    public function deleteByUser(array $params)
    {
        return $this->send("delete", ["{user_id}" => $params["user_id"],
        "{occupation_id}" => $params["occupation_id"]], ["current" => $params["current"]]);
    }

    /**
     * Updates an occupation entry for a user.
     *
     * Returns the ID of the occupation updated.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param array{user_id: int, occupation_id: int} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the user.
     *     - occupation_id: Format - int32. The ID of the occupation.
     *
     * @return \int
     *
     * @api
     */
    public function patchByUser(array $params)
    {
        return $this->send("patch", ["{user_id}" => $params["user_id"],
        "{occupation_id}" => $params["occupation_id"]], []);
    }
}
