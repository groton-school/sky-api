<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentAllergyUpdate;
use Blackbaud\SKY\School\Components\StudentMedicalAllergy;

/**
 * @api
 */
class Allergies extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/allergies/{allergy_id}";

    /**
     * Delete a medical allergy for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{allergy_id: int} $params An associative array
     *     - allergy_id: Format - int32. The ID of the student's allergy.
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByAllergyId(array $params): int
    {
        assert(isset($params['allergy_id']), new ArgumentException("Parameter `allergy_id` is required"));

        return $this->send("delete", ["{allergy_id}" => $params['allergy_id']], []);
    }

    /**
     * Update a medical allergy for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{allergy_id: int} $params An associative array
     *     - allergy_id: Format - int32. The ID of the student's allergy.
     * @param \Blackbaud\SKY\School\Components\StudentAllergyUpdate
     *   $requestBody The allergy changes
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnAllergyId(array $params, StudentAllergyUpdate $requestBody): int
    {
        assert(isset($params['allergy_id']), new ArgumentException("Parameter `allergy_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{allergy_id}" => $params['allergy_id']], [], $requestBody);
    }

    /**
     * Creates an allergy for a student.
     *
     *  Returns the newly created ID.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param \Blackbaud\SKY\School\Components\StudentMedicalAllergy
     *   $requestBody The medical allergy to be created for student
     *
     * @return int ID of the student medical allergy just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(StudentMedicalAllergy $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
