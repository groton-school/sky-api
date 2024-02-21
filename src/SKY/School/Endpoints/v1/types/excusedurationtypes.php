<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\ExcuseDurationTypes;

/**
 * @api
 */
class Excusedurationtypes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/excusedurationtypes";

    /**
     * Returns a collection of excuse duration types.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Basic
     *
     * @return \Blackbaud\SKY\School\Components\ExcuseDurationTypes Success
     *
     * @api
     */
    public function getAll(): ExcuseDurationTypes
    {
        return new ExcuseDurationTypes($this->send("get", [], []));
    }
}
