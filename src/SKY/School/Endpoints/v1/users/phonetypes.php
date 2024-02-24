<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\PhoneTypeCollection;

/**
 * @api
 */
class Phonetypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/phonetypes";

    /**
     * Returns a collection of phone types. Requires at least one of the
     * following roles in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Components\PhoneTypeCollection Success
     */
    public function getAll(): PhoneTypeCollection
    {
        return new PhoneTypeCollection($this->send("get", [], []));
    }
}
