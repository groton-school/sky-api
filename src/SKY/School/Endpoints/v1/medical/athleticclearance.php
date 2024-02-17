<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\StudentAthleticRequirementUpdate;

/**
 * @api
 */
class athleticclearance extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/athleticclearance";

    /**
     * Updates a medical athletic requirements for a student.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param Blackbaud\SKY\School\Objects\StudentAthleticRequirementUpdate
     *   $requestBody The athletics requirements to update
     *
     * @return \string[]
     *
     * @api
     */
    public function post(StudentAthleticRequirementUpdate $requestBody)
    {
        return $this->send("post", [], [], $requestBody);
    }
}
