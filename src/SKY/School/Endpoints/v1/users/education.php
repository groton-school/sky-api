<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EducationAdd;
use Blackbaud\SKY\School\Components\EducationReadCollection;
use Blackbaud\SKY\School\Components\EducationUpdate;

/**
 * @api
 */
class Education extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/education/{education_id}";

    /**
     * Returns a collection of education information for the specified
     * ```user_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\EducationReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): EducationReadCollection
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new EducationReadCollection($this->send("get", ["{user_id}" => $user_id], []));
    }

    /**
     * Creates an education entry for a user.
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
     * @param \Blackbaud\SKY\School\Components\EducationAdd $requestBody The
     *   education model.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, EducationAdd $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
    }

    /**
     * Deletes an education entry for a user.
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
     * @param int $user_id Format - int32.
     * @param int $education_id Format - int32.
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function deleteByUser(int $user_id, int $education_id): void
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($education_id !== null, new ArgumentException("Parameter `education_id` is required"));

        return $this->send("delete", ["{user_id}" => $user_id,
        "{education_id}" => $education_id], []);
    }

    /**
     * Updates an education entry for a user.
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
     * @param int $education_id Format - int32. The ID of the education.
     * @param \Blackbaud\SKY\School\Components\EducationUpdate $requestBody
     *   The education model.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function patchByUser(int $user_id, int $education_id, EducationUpdate $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($education_id !== null, new ArgumentException("Parameter `education_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $user_id,
        "{education_id}" => $education_id], [], $requestBody);
    }
}
