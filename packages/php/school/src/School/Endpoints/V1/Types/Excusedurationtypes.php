<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\ExcuseDurationTypes as Components_ExcuseDurationTypes;

/**
 * @api
 */
class Excusedurationtypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/types/excusedurationtypes";

    /**
     * Returns a collection of excuse duration types.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Basic
     *
     * @return \Blackbaud\SKY\School\Components\ExcuseDurationTypes Success
     */
    public function get(): Components_ExcuseDurationTypes
    {
        return new Components_ExcuseDurationTypes($this->send("get", [], []));
    }
}
