<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AdminCustomFieldsCollection;

/**
 * @api
 */
class customfields extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/customfields";

    /**
     * Returns a collection of admin custom fields.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @return \Blackbaud\SKY\School\Objects\AdminCustomFieldsCollection
     *
     * @api
     */
    public function getAll()
    {
        return new AdminCustomFieldsCollection($this->send("get", [], []));
    }
}
