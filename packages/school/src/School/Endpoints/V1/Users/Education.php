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
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/education/{education_id}";

    /**
     * Returns a collection of education information for the specified
     * ```user\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\EducationReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): EducationReadCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new EducationReadCollection($this->send("get", ["{user_id}" => $params['user_id']], []));
    }

    /**
     * Creates an education entry for a user.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\EducationAdd $requestBody The
     *   education model.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postByUserId(array $params, EducationAdd $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $params['user_id']], [], $requestBody);
    }

    /**
     * Deletes an education entry for a user.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{user_id: int, education_id: int} $params An associative
     *   array
     *     - user_id: Format - int32.
     *     - education_id: Format - int32.
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByUserIdAndEducationId(array $params): void
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['education_id']), new ArgumentException("Parameter `education_id` is required"));

        return $this->send("delete", ["{user_id}" => $params['user_id'],
        "{education_id}" => $params['education_id']], []);
    }

    /**
     * Updates an education entry for a user.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{user_id: int, education_id: int} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the user.
     *     - education_id: Format - int32. The ID of the education.
     * @param \Blackbaud\SKY\School\Components\EducationUpdate $requestBody
     *   The education model.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByUserIdAndEducationId(array $params, EducationUpdate $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['education_id']), new ArgumentException("Parameter `education_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $params['user_id'],
        "{education_id}" => $params['education_id']], [], $requestBody);
    }
}
