<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclaration;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclarationCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclarationEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Taxdeclarations extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/giftaid/taxdeclarations/{id}";

    /**
     * Returns a Gift Aid tax declaration.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The tax declaration identifier.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclaration
     *   Returned when the operation succeeds. The response body contains the
     *   tax declaration.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): GiftAidTaxDeclaration
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new GiftAidTaxDeclaration($this->send("get", ["id" => $params['id']], []));
    }

    /**
     * Deletes a Gift Aid tax declaration.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The tax declaration identifier.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclaration
     *   Returned when the operation successfully deletes the tax declaration.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): GiftAidTaxDeclaration
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new GiftAidTaxDeclaration($this->send("delete", ["id" => $params['id']], []));
    }

    /**
     * Edit a Gift Aid tax declaration.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The ID of the tax declaration to update.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclarationEdit
     *   $requestBody Description of changes for the tax declaration.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, GiftAidTaxDeclarationEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["id" => $params['id']], [], $requestBody);
    }

    /**
     * Creates a Gift Aid tax declaration.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\GiftAidTaxDeclarationCreate
     *   $requestBody The tax declaration to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new tax declaration ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(GiftAidTaxDeclarationCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
