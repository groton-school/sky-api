<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTribute as Components_GiftTribute;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Acknowledgees;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Gift;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Importid;

/**
 * Routing class for the subnamespace `Gifttribute`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Importid
 *   $importid
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Gift
 *   $gift
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Acknowledgees
 *   $acknowledgees
 *
 * @api
 */
class Gifttribute extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/gifttribute/{giftTributeId}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "importid" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Importid",
        "gift" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Gift",
        "acknowledgees" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Acknowledgees",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Importid
     *   $_importid
     */
    protected ?Importid $_importid = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Gift
     *   $_gift
     */
    protected ?Gift $_gift = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifttribute\Acknowledgees
     *   $_acknowledgees
     */
    protected ?Acknowledgees $_acknowledgees = null;

    /**
     * Returns details about a tribute with the given ID.
     *
     * @param array{giftTributeId: int} $params An associative array
     *     - giftTributeId: Format - int32. The ID of the gift tribute to get.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTribute
     *   Returned when the operation succeeds. The response body contains the
     *   gift tribute record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByGiftTributeId(array $params): Components_GiftTribute
    {
        assert(isset($params['giftTributeId']), new ArgumentException("Parameter `giftTributeId` is required"));

        return new Components_GiftTribute($this->send("get", ["{giftTributeId}" => $params['giftTributeId']], []));
    }

    /**
     * Deletes a gift tribute.
     *
     * @param array{giftTributeId: int} $params An associative array
     *     - giftTributeId: Format - int32. The ID of the gift tribute to
     *   delete.
     *
     * @return mixed Returned when the operation succeeds. The response body
     *   contains the gift tribute record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByGiftTributeId(array $params): mixed
    {
        assert(isset($params['giftTributeId']), new ArgumentException("Parameter `giftTributeId` is required"));

        return $this->send("delete", ["{giftTributeId}" => $params['giftTributeId']], []);
    }

    /**
     * Update the details about a gift tribute.
     *
     * @param array{giftTributeId: int} $params An associative array
     *     - giftTributeId: Format - int32. The ID of the gift tribute to
     *   update.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeEdit
     *   $requestBody Description of changes for the gift tribute.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnGiftTributeId(array $params, GiftTributeEdit $requestBody): mixed
    {
        assert(isset($params['giftTributeId']), new ArgumentException("Parameter `giftTributeId` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{giftTributeId}" => $params['giftTributeId']], [], $requestBody);
    }

    /**
     * Returns a collection of gift tributes.
     *
     * @param array{limit: int, offset: int} $params An associative array
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeCollection
     *   Returned when the operation succeeds. The response body contains the
     *   gift tribute records.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): GiftTributeCollection
    {
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new GiftTributeCollection($this->send("get", [], ["limit" => $params['limit'],
            "offset" => $params['offset']]));
    }

    /**
     * Creates a new gift tribute.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\GiftTributeCreate
     *   $requestBody The gift tribute to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new gift tribute ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(GiftTributeCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
