<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserEnrollmentCreate;
use Blackbaud\SKY\School\Objects\UserEnrollmentResponse;

/**
 * @api
 */
class enroll extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/enroll";

    /**
     * Creates the users enrollment record.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param Blackbaud\SKY\School\Objects\UserEnrollmentCreate $requestBody
     *
     * @return \Blackbaud\SKY\School\Objects\UserEnrollmentResponse
     *
     * @api
     */
    public function post(UserEnrollmentCreate $requestBody)
    {
        return new UserEnrollmentResponse($this->send("post", [], [], $requestBody));
    }
}
