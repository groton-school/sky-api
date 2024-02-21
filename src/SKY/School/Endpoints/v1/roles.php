<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\RoleCollection;

/**
 * @api
 */
class Roles extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/roles";

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
     * @return \Blackbaud\SKY\School\Components\RoleCollectionSuccess
     *
     * @api
     */
    public function getAll(): RoleCollection
    {
        return new RoleCollection($this->send("get", [], []));
    }
}
