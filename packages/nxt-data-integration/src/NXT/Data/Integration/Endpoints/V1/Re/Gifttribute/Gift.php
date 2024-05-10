<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeCollection;

/**
 * @api
 */
class Gift extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/gifttribute/gift/{giftId}";

    /**
     * List the tributes for a gift.
     *
     * @param array{giftId: int} $params An associative array
     *     - giftId: Format - int32. The ID of the gift to get tributes for.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeCollection
     *   Returned when the operation succeeds. The response body contains the
     *   gift tribute records.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByGiftId(array $params): GiftTributeCollection
    {
        assert(isset($params['giftId']), new ArgumentException("Parameter `giftId` is required"));

        return new GiftTributeCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['giftId']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
