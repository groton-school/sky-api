<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
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
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/occupations/{occupation_id}";

    /**
     * Returns a collection of occupations for the specified ```user_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\OccupationReadCollectionSuccess

     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): OccupationReadCollection
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new OccupationReadCollection($this->send("get", ["{user_id}" => $user_id], []));
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
     * @param int $user_id Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\OccupationCreate $requestBody
     *   The occupation information to be created.
     *
     * @return intSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, OccupationCreate $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
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
     * @param int $user_id Format - int32. The ID of the user.
     * @param int $occupation_id Format - int32. The ID of the occupation.
     * @param ?bool $current (Optional) Current Employment Status
     *
     * @return intSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function deleteByUser(int $user_id, int $occupation_id, ?bool $current = null): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($occupation_id !== null, new ArgumentException("Parameter `occupation_id` is required"));

        return $this->send("delete", ["{user_id}" => $user_id,
        "{occupation_id}" => $occupation_id], ["current" => $current]);
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
     * @param int $user_id Format - int32. The ID of the user.
     * @param int $occupation_id Format - int32. The ID of the occupation.
     * @param \Blackbaud\SKY\School\Components\OccupationUpdate $requestBody
     *   The occupation information to be updated.
     *
     * @return intSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function patchByUser(int $user_id, int $occupation_id, OccupationUpdate $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($occupation_id !== null, new ArgumentException("Parameter `occupation_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $user_id,
        "{occupation_id}" => $occupation_id], [], $requestBody);
    }
}
