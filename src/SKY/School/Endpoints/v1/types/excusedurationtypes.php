<?php

namespace Blackbaud\SKY\School\Endpoints\v1\types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ExcuseDurationTypes;

/**
 * @api
 */
class excusedurationtypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/excusedurationtypes";

    /**
     * Returns a collection of excuse duration types.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Basic
     *
     * @return \Blackbaud\SKY\School\Objects\ExcuseDurationTypes
     *
     * @api
     */
    public function getAll()
    {
        return new ExcuseDurationTypes($this->send("get", [], []));
    }
}
