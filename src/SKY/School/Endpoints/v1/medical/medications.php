<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
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
     * Create a medication for a student.<br />
     *
     * Returns the newly created ID. <br />
     *
     * Requires one of the following roles in the Education Management system:
     *
     * <ul><li>Nurse</li></ul>
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
     */
    public function post(StudentMedicationCreate $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }

    /**
     * Delete a medication for a student.<br />
     *
     * Requires one of the following roles in the Education Management system:
     *
     * <ul><li>Nurse</li></ul>
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
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
    public function delete(array $params): int
    {
        assert(isset($params['medication_id']), new ArgumentException("Parameter `medication_id` is required"));

        return $this->send("delete", ["{medication_id}" => $params['medication_id']], []);
    }

    /**
     * Updates a medical medication for a student.<br />
     *
     * Requires one of the following roles in the Education Management system:
     *
     * <ul><li>Nurse</li></ul>
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
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
    public function patch(array $params, StudentMedicationUpdate $requestBody): int
    {
        assert(isset($params['medication_id']), new ArgumentException("Parameter `medication_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{medication_id}" => $params['medication_id']], [], $requestBody);
    }
}
