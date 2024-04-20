<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\AddressTypeCollection;

/**
 * @api
 */
class Addresstypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/addresstypes";

    /**
     * Returns a collection of address types.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Components\AddressTypeCollection Success
     */
    public function list_(): AddressTypeCollection
    {
        return new AddressTypeCollection($this->send("get", [], []));
    }
}
