<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\SecurityRoleCollection;

/**
 * @api
 */
class Securityroles extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/securityroles";

    /**
     * Returns the user roles available for additional access control when
     * posting medical data like student allergies or student medication.
     *
     *  The ```role\_access``` object in those post endpoints takes in the
     * role IDs returned here.
     *
     * @return \Blackbaud\SKY\School\Components\SecurityRoleCollection Success
     */
    public function list_(): SecurityRoleCollection
    {
        return new SecurityRoleCollection($this->send("get", [], []));
    }
}
