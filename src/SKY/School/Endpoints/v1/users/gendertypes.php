<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\GenderTypeCollection;

/**
 * @api
 */
class gendertypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/gendertypes";

    /**
     * Returns a collection of gender types.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\GenderTypeCollection
     *
     * @api
     */
    public function getAll()
    {
        return new GenderTypeCollection($this->send("get", [], []));
    }
}
