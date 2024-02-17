<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users\phones;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\PhoneShare;

/**
 * @api
 */
class share extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/phones/share";

    /**
     * For an existing user, create a link to an existing phone number.
     *
     * Returns the ID of the phone number just shared.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * - SKY API Data Sync
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user the existing address
     *   should be shared.
     * @param Blackbaud\SKY\School\Objects\PhoneShare $requestBody The details
     *   about the phone number that should be shared with the user.
     *
     * @return \int
     *
     * @api
     */
    public function postByUser(array $params, PhoneShare $requestBody)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], [], $requestBody);
    }
}
