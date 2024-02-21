<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentMedicationCreate;
use Blackbaud\SKY\School\Components\StudentMedicationUpdate;

/**
 * @api
 */
class Medications extends BaseEndpoint
{
    /**
     * @var string $url
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
     * @param \Blackbaud\SKY\School\Components\StudentMedicationCreate
     *   $requestBody The medication to be created for student
     *
     * @return int ID of the student medication just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function post(StudentMedicationCreate $requestBody): int
    {
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

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
     * @param int $medication_id Format - int32. The ID of the student's
     *   medication.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function delete(int $medication_id): int
    {
        assert($medication_id !== null, new ArgumentException("Parameter `medication_id` is required"));

        return $this->send("delete", ["{medication_id}" => $medication_id], []);
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
     * @param int $medication_id Format - int32. >The student medication ID
     * @param \Blackbaud\SKY\School\Components\StudentMedicationUpdate
     *   $requestBody The medication changes to update
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function patch(int $medication_id, StudentMedicationUpdate $requestBody): int
    {
        assert($medication_id !== null, new ArgumentException("Parameter `medication_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{medication_id}" => $medication_id], [], $requestBody);
    }
}
