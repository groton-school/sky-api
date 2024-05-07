<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftIdMap as Components_GiftIdMap;

/**
 * @api
 */
class Giftidmap extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/giftidmap/{giftlookupid}";

    /**
     * Returns a gift system record id mapping for a given gift lookup id.
     *
     * @param array{giftlookupid: string} $params An associative array
     *     - giftlookupid: The gift lookup ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftIdMap
     *   Returned when the operation succeeds. The response body contains the
     *   system record id and the gift lookup id.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByGiftlookupid(array $params): Components_GiftIdMap
    {
        assert(isset($params['giftlookupid']), new ArgumentException("Parameter `giftlookupid` is required"));

        return new Components_GiftIdMap($this->send("get", ["giftlookupid" => $params['giftlookupid']], []));
    }
}
