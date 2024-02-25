<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserEnrollmentCreate;
use Blackbaud\SKY\School\Components\UserEnrollmentResponse;

/**
 * @api
 */
class Enroll extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/enroll";

    /**
     * Creates the users enrollment record.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>SKY API Data Sync</li></ul>
     *
     * @param \Blackbaud\SKY\School\Components\UserEnrollmentCreate
     *   $requestBody
     *
     * @return \Blackbaud\SKY\School\Components\UserEnrollmentResponse Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(UserEnrollmentCreate $requestBody): UserEnrollmentResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new UserEnrollmentResponse($this->send("post", [], [], $requestBody));
    }
}
