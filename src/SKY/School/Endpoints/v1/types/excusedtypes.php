<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\ExcusedTypesCollection;

/**
 * @api
 */
class Excusedtypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/types/excusedtypes";

    /**
     * Returns a collection of excused types.<br></br>
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>SKY API Basic</li><li>Any Manager Role</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\ExcusedTypesCollection Success
     */
    public function getAll(): ExcusedTypesCollection
    {
        return new ExcusedTypesCollection($this->send("get", [], []));
    }
}
