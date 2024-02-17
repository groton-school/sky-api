<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserMe;

/**
 * @api
 */
class me extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/me";

    /**
     * Returns information about the caller.
     *
     * @return \Blackbaud\SKY\School\Objects\UserMe
     *
     * @api
     */
    public function getAll()
    {
        return new UserMe($this->send("get", [], []));
    }
}
