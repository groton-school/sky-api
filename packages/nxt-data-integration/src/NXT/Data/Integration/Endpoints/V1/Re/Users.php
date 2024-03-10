<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\User;

/**
 * @api
 */
class Users extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/users/{id}";

    /**
     * Returns details about a user record.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The system ID of the user.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\User Returned
     *   when the operation succeeds. The response body contains information
     *   from the user record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): User
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new User($this->send("get", ["{id}" => $params['id']], []));
    }
}
