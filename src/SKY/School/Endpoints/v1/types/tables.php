<?php

namespace Blackbaud\SKY\School\Endpoints\v1\types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\TableCollection;

/**
 * @api
 */
class tables extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/tables";

    /**
     * Returns a collection of table types.
     *
     * System tables will have an Id that is a negative number (Example: -100)
     * User defined tables will have an Id that is a positive number (Example:
     * 100) ***This endpoint is in BETA. It may be removed or replaced with a
     * 90 day deprecation period.***
     *
     * @return \Blackbaud\SKY\School\Objects\TableCollection
     *
     * @api
     */
    public function getAll()
    {
        return new TableCollection($this->send("get", [], []));
    }
}
