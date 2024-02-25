<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\GenderTypeCollection;

/**
 * @api
 */
class Gendertypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/gendertypes";

    /**
     * Returns a collection of gender types. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>SKY API Data Sync</li><li>Any Manager Role</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\GenderTypeCollection Success
     */
    public function getAll(): GenderTypeCollection
    {
        return new GenderTypeCollection($this->send("get", [], []));
    }
}
