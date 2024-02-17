<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\RoleCollection;

/**
 * @api
 */
class roles extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/roles";

    /**
     * Returns a collection of core school user roles.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\RoleCollection
     *
     * @api
     */
    public function getAll()
    {
        return new RoleCollection($this->send("get", [], []));
    }
}
