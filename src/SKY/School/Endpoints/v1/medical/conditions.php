<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\StudentConditionUpdate;
use Blackbaud\SKY\School\Objects\StudentMedicalCondition;

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
     * @param Blackbaud\SKY\School\Objects\StudentConditionUpdate $requestBody
     *   The condition changes
     *
     * @return \int
     *
     * @api
     */
    public function patch(array $params, StudentConditionUpdate $requestBody)
    {
        return $this->send("patch", ["{condition_id}" => $params["condition_id"]], [], $requestBody);
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
     * @param Blackbaud\SKY\School\Objects\StudentMedicalCondition
     *   $requestBody The medical condition to be created for student
     *
     * @return \int
     *
     * @api
     */
    public function post(StudentMedicalCondition $requestBody)
    {
        return $this->send("post", [], [], $requestBody);
    }
}
