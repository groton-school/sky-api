<?php

namespace Blackbaud\SKY\School\Endpoints\v1\types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ExcusedTypesCollection;

/**
 * @api
 */
class excusedtypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/excusedtypes";

    /**
     * Returns a collection of excused types.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Basic
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\ExcusedTypesCollection
     *
     * @api
     */
    public function getAll()
    {
        return new ExcusedTypesCollection($this->send("get", [], []));
    }
}
