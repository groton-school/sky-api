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
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/types/excusedurationtypes";

    /**
     * Returns a collection of excuse duration types.<br></br>
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>SKY API Basic</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\ExcuseDurationTypes Success
     */
    public function getAll(): ExcuseDurationTypes
    {
        return new ExcuseDurationTypes($this->send("get", [], []));
    }
}
