<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\TributeCollection;

/**
 * @api
 */
class Constituent extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/tribute/constituent/{constituentId}";

    /**
     * Returns a list of tributes for the given constituent.
     *
     * @param array{constituentId: int} $params An associative array
     *     - constituentId: Format - int32. The ID of the constituent to get
     *   tributes for.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\TributeCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of tributes.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): TributeCollection
    {
        assert(isset($params['constituentId']), new ArgumentException("Parameter `constituentId` is required"));

        return new TributeCollection($this->send("get", ["{constituentId}" => $params['constituentId']], []));
    }
}
