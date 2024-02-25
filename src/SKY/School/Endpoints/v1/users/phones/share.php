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
     * For an existing user, create a link to an existing phone number.<br />
     *
     * Returns the ID of the phone number just shared. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Contact Card Manager</li><li>Platform Manager</li><li>SKY API
     * Data Sync</li></ul>
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user the existing address
     *   should be shared.
     * @param \Blackbaud\SKY\School\Components\PhoneShare $requestBody The
     *   details about the phone number that should be shared with the user.
     *
     * @return int ID of the address just shared.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postByUser(array $params, PhoneShare $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $params['user_id']], [], $requestBody);
    }
}
