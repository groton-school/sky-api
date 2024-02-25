<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentMedicalAllergyCondition;

/**
 * @api
 */
class Allergiesconditions extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/allergiesconditions";

    /**
     * Creates medical allergy/condition record for a student.<br />
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
     * @param \Blackbaud\SKY\School\Components\StudentMedicalAllergyCondition
     *   $requestBody The medical allergy/condition to be created for student
     *
     * @return int ID of the student medical allergy/condition just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(StudentMedicalAllergyCondition $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
