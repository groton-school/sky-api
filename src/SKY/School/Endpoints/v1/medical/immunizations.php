<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\StudentImmunizationUpdate;

/**
 * @api
 */
class immunizations extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/immunizations";

    /**
     * Updates a medical immunization for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param Blackbaud\SKY\School\Objects\StudentImmunizationUpdate
     *   $requestBody The immunizations to update
     *
     * @return \void
     *
     * @api
     */
    public function post(StudentImmunizationUpdate $requestBody)
    {
        return $this->send("post", [], [], $requestBody);
    }
}
