<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\AdminCustomFieldsCollection;

/**
 * @api
 */
class Customfields extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/customfields";

    /**
     * Returns a collection of admin custom fields.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @return \Blackbaud\SKY\School\Components\AdminCustomFieldsCollection
     *   Success
     */
    public function getAllBy(): AdminCustomFieldsCollection
    {
        return new AdminCustomFieldsCollection($this->send("get", [], []));
    }
}
