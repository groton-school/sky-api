<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\PhoneTypeCollection;

/**
 * @api
 */
class phonetypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/phonetypes";

    /**
     * Returns a collection of phone types. Requires at least one of the
     * following roles in the Education Management system:
     *
     * - SKY API Data Sync
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\PhoneTypeCollection
     *
     * @api
     */
    public function getAll()
    {
        return new PhoneTypeCollection($this->send("get", [], []));
    }
}
