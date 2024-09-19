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
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/medications/{medication_id}";

    /**
     * Create a medication for a student.
     *
     *  Returns the newly created ID.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * @param \Blackbaud\SKY\School\Components\StudentMedicationCreate
     *   $requestBody The medication to be created for student
     *
     * @return int ID of the student medication just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(StudentMedicationCreate $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }

    /**
     * Delete a medication for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * @param array{medication_id: int} $params An associative array
     *     - medication_id: Format - int32. The ID of the student's
     *   medication.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByMedicationId(array $params): int
    {
        assert(isset($params['medication_id']), new ArgumentException("Parameter `medication_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['medication_id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * Updates a medical medication for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * @param array{medication_id: int} $params An associative array
     *     - medication_id: Format - int32. &gt;The student medication ID
     * @param \Blackbaud\SKY\School\Components\StudentMedicationUpdate
     *   $requestBody The medication changes to update
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnMedicationId(array $params, StudentMedicationUpdate $requestBody): int
    {
        assert(isset($params['medication_id']), new ArgumentException("Parameter `medication_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['medication_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
