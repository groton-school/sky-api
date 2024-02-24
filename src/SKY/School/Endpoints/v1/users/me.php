<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\UserMe;

/**
 * @api
 */
class Me extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/me";

    /**
     * Returns information about the caller.
     *
     * @return \Blackbaud\SKY\School\Components\UserMe Success
     */
    public function getAll(): UserMe
    {
        return new UserMe($this->send("get", [], []));
    }
}
