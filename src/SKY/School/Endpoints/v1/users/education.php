<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EducationAdd;
use Blackbaud\SKY\School\Objects\EducationReadCollection;
use Blackbaud\SKY\School\Objects\EducationUpdate;

/**
 * @api
 */
class education extends BaseEndpoint
{
    /**
     * @var string url
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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\EducationReadCollection
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return new EducationReadCollection($this->send("get", ["{user_id}" => $params["user_id"]], []));
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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param Blackbaud\SKY\School\Objects\EducationAdd $requestBody The
     *   education model.
     *
     * @return \int
     *
     * @api
     */
    public function postByUser(array $params, EducationAdd $requestBody)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], [], $requestBody);
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
     * @param array{user_id: int, education_id: int} $params An associative
     *   array
     *     - user_id: Format - int32.
     *     - education_id: Format - int32.
     *
     * @return \void
     *
     * @api
     */
    public function deleteByUser(array $params)
    {
        return $this->send("delete", ["{user_id}" => $params["user_id"],
        "{education_id}" => $params["education_id"]], []);
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
     * @param array{user_id: int, education_id: int} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the user.
     *     - education_id: Format - int32. The ID of the education.
     * @param Blackbaud\SKY\School\Objects\EducationUpdate $requestBody The
     *   education model.
     *
     * @return \int
     *
     * @api
     */
    public function patchByUser(array $params, EducationUpdate $requestBody)
    {
        return $this->send("patch", ["{user_id}" => $params["user_id"],
        "{education_id}" => $params["education_id"]], [], $requestBody);
    }
}
