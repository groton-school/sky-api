<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class medications extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/medications/{medication_id}";

    /**
     * Create a medication for a student.
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

    /**
     * Delete a medication for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{medication_id: int} $params An associative array
     *     - medication_id: Format - int32. The ID of the student's
     *   medication.
     *
     * @return \int
     *
     * @api
     */
    public function delete(array $params)
    {
        return $this->send("delete", ["{medication_id}" => $params["medication_id"]], []);
    }

    /**
     * Updates a medical medication for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{medication_id: int} $params An associative array
     *     - medication_id: Format - int32. >The student medication ID
     *
     * @return \int
     *
     * @api
     */
    public function patch(array $params)
    {
        return $this->send("patch", ["{medication_id}" => $params["medication_id"]], []);
    }
}
