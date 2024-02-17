<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class conditions extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/conditions/{condition_id}";

    /**
     * Delete a medical condition for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{condition_id: int} $params An associative array
     *     - condition_id: Format - int32. The ID of the student's condition.
     *
     * @return \int
     *
     * @api
     */
    public function delete(array $params)
    {
        return $this->send("delete", ["{condition_id}" => $params["condition_id"]], []);
    }

    /**
     * Update a medical condition for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{condition_id: int} $params An associative array
     *     - condition_id: Format - int32. The ID of the student's condition.
     *
     * @return \int
     *
     * @api
     */
    public function patch(array $params)
    {
        return $this->send("patch", ["{condition_id}" => $params["condition_id"]], []);
    }

    /**
     * Creates a condition for a student.
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
