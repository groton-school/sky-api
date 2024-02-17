<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\StudentMedicationCreate;
use Blackbaud\SKY\School\Objects\StudentMedicationUpdate;

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
     * @param Blackbaud\SKY\School\Objects\StudentMedicationCreate
     *   $requestBody The medication to be created for student
     *
     * @return \int
     *
     * @api
     */
    public function post(StudentMedicationCreate $requestBody)
    {
        return $this->send("post", [], [], $requestBody);
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
     * @param Blackbaud\SKY\School\Objects\StudentMedicationUpdate
     *   $requestBody The medication changes to update
     *
     * @return \int
     *
     * @api
     */
    public function patch(array $params, StudentMedicationUpdate $requestBody)
    {
        return $this->send("patch", ["{medication_id}" => $params["medication_id"]], [], $requestBody);
    }
}
