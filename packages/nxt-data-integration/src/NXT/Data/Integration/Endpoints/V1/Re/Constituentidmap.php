<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentIdMap as Components_ConstituentIdMap;

/**
 * @api
 */
class Constituentidmap extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/constituentidmap/{constituentid}";

    /**
     * Returns a constituent system record id mapping for a given constituent
     * id.
     *
     * @param array{constituentid: string} $params An associative array
     *     - constituentid: The constituent ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentIdMap
     *   Returned when the operation succeeds. The response body contains the
     *   system record id and the constituent id.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentid(array $params): Components_ConstituentIdMap
    {
        assert(isset($params['constituentid']), new ArgumentException("Parameter `constituentid` is required"));

        return new Components_ConstituentIdMap($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituentid']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
