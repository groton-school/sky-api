<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class allergies extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/allergies/{allergy_id}";

    /**
     * Delete a medical allergy for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{allergy_id: int} $params An associative array
     *     - allergy_id: Format - int32. The ID of the student's allergy.
     *
     * @return \int
     *
     * @api
     */
    public function delete(array $params)
    {
        return $this->send("delete", ["{allergy_id}" => $params["allergy_id"]], []);
    }

    /**
     * Update a medical allergy for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{allergy_id: int} $params An associative array
     *     - allergy_id: Format - int32. The ID of the student's allergy.
     *
     * @return \int
     *
     * @api
     */
    public function patch(array $params)
    {
        return $this->send("patch", ["{allergy_id}" => $params["allergy_id"]], []);
    }

    /**
     * Creates an allergy for a student.
     *
     * Returns the newly created ID.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @return \int
     *
     * @api
     */
    public function post()
    {
        return $this->send("post", [], []);
    }
}
