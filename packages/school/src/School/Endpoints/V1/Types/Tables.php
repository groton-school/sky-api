<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\TableCollection;

/**
 * @api
 */
class Tables extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/types/tables";

    /**
     * Returns a collection of table types.
     *
     *  System tables will have an ID that is a negative number (Example:
     * -100) User defined tables will have an ID that is a positive number
     * (Example: 100)
     *
     * @return \Blackbaud\SKY\School\Components\TableCollection Success
     */
    public function list_(): TableCollection
    {
        return new TableCollection($this->send("get", [], []));
    }
}
