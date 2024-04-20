<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclarationCollection;

/**
 * @api
 */
class Taxdeclarations extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/giftaid/constituents/{id}/taxdeclarations";

    /**
     * Returns a list of Gift Aid tax declarations for a given constituent.
     *
     * @param array{id: int, limit: int, offset: int} $params An associative
     *   array
     *     - id: Format - int32. The constituent identifier.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclarationCollection
     *   Returned when the operation succeeds. The response body contains the
     *   list of tax declarations.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchById(array $params): GiftAidTaxDeclarationCollection
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new GiftAidTaxDeclarationCollection($this->send("get", ["{id}" => $params['id']], ["limit" => $params['limit'],
            "offset" => $params['offset']]));
    }
}
