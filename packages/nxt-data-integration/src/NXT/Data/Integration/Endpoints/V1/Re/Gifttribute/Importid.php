<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTribute;

/**
 * @api
 */
class Importid extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/gifttribute/importid/{importId}";

    /**
     * Returns details about a tribute with the given import ID.
     *
     * @param array{importId: string} $params An associative array
     *     - importId: The import ID of the gift tribute to get.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTribute
     *   Returned when the operation succeeds. The response body contains the
     *   gift tribute record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByImportId(array $params): GiftTribute
    {
        assert(isset($params['importId']), new ArgumentException("Parameter `importId` is required"));

        return new GiftTribute($this->send("get", array_filter($params, fn($key) => in_array($key, ['importId']), ARRAY_FILTER_USE_KEY), []));
    }
}
