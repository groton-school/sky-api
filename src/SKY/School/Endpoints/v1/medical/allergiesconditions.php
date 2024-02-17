<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\StudentMedicalAllergyCondition;

/**
 * @api
 */
class allergiesconditions extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/allergiesconditions";

    /**
     * Creates medical allergy/condition record for a student.
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
     * @param Blackbaud\SKY\School\Objects\StudentMedicalAllergyCondition
     *   $requestBody The medical allergy/condition to be created for student
     *
     * @return \int
     *
     * @api
     */
    public function post(StudentMedicalAllergyCondition $requestBody)
    {
        return $this->send("post", [], [], $requestBody);
    }
}
