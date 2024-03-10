<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\TributeAcknowledgeeCollection;

/**
 * @api
 */
class Acknowledgees extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/tribute/{tributeId}/acknowledgees";

    /**
     * Returns a list of tribute acknowledgees for the given tribute.
     *
     * @param array{tributeId: int} $params An associative array
     *     - tributeId: Format - int32. The ID of the tribute to get
     *   acknowledgees for.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\TributeAcknowledgeeCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of tributes acknowledgees.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByTributeId(array $params): TributeAcknowledgeeCollection
    {
        assert(isset($params['tributeId']), new ArgumentException("Parameter `tributeId` is required"));

        return new TributeAcknowledgeeCollection($this->send("get", ["{tributeId}" => $params['tributeId']], []));
    }
}
