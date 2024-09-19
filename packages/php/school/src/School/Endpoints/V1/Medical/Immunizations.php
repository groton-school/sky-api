<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentImmunizationUpdate;

/**
 * @api
 */
class Immunizations extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/immunizations";

    /**
     * Updates a medical immunization for a student.
     *
     *  Requires one of the following roles in the Education Management
     * system:
     *
     * - Nurse
     *
     * @param \Blackbaud\SKY\School\Components\StudentImmunizationUpdate
     *   $requestBody The immunizations to update
     *
     * @return mixed Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(StudentImmunizationUpdate $requestBody): mixed
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
