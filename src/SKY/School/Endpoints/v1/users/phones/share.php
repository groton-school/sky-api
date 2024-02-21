<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users\Phones;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\PhoneShare;

/**
 * @api
 */
class Share extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/phones/share";

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
     * @param int $user_id Format - int32. The Id of the user the existing
     *   address should be shared.
     * @param \Blackbaud\SKY\School\Components\PhoneShare $requestBody The
     *   details about the phone number that should be shared with the user.
     *
     * @return intID of the address just shared.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, PhoneShare $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
    }
}
