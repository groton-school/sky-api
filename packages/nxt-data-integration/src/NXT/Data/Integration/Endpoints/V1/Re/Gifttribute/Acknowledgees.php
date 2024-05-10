<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeAcknowledgeeCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeAcknowledgeeEdit;

/**
 * @api
 */
class Acknowledgees extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/gifttribute/acknowledgees/{giftTributeAcknowledgeeId}";

    /**
     * List the acknowledgees for a gift tribute.
     *
     * @param array{giftTributeId: int} $params An associative array
     *     - giftTributeId: Format - int32. The ID of the gift tribute to get
     *   acknowledgees for.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeAcknowledgeeCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of gift tribute acknowledgees.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByGiftTributeId(array $params): GiftTributeAcknowledgeeCollection
    {
        assert(isset($params['giftTributeId']), new ArgumentException("Parameter `giftTributeId` is required"));

        return new GiftTributeAcknowledgeeCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['giftTributeId']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Update the details about a gift tribute acknowledgee.
     *
     * @param array{giftTributeAcknowledgeeId: int} $params An associative
     *   array
     *     - giftTributeAcknowledgeeId: Format - int32. The ID of the gift
     *   tribute acknowledgee to update.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeAcknowledgeeEdit
     *   $requestBody Description of changes for the gift tribute acknowledgee.

     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnGiftTributeAcknowledgeeId(array $params, GiftTributeAcknowledgeeEdit $requestBody): mixed
    {
        assert(isset($params['giftTributeAcknowledgeeId']), new ArgumentException("Parameter `giftTributeAcknowledgeeId` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['giftTributeAcknowledgeeId']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
