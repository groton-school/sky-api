<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddress;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAddress;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAddress;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\Search;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\View;

/**
 * Routing class for the subnamespace `Addresses`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\View $view
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\Search
 *   $search
 *
 * @api
 */
class Addresses extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/addresses/{address_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "view" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\View",
        "search" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\Search",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\View $_view
     */
    protected ?View $_view = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses\Search
     *   $_search
     */
    protected ?Search $_search = null;

    /**
     * This operation is used to add an address.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAddress
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentAddress $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody));
    }

    /**
     * This operation is used to edit an address.
     *
     * @param array{address_id: string} $params An associative array
     *     - address_id: The address id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddress
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByAddressId(array $params): ConstituentAddress
    {
        assert(isset($params['address_id']), new ArgumentException("Parameter `address_id` is required"));

        return new ConstituentAddress($this->send("get", array_filter($params, fn($key) => in_array($key, ['address_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * This deletion handles only the basic deletion rules for an address
     * (currently none).
     *
     * @param array{address_id: string} $params An associative array
     *     - address_id: The address id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByAddressId(array $params): mixed
    {
        assert(isset($params['address_id']), new ArgumentException("Parameter `address_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['address_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * This operation is used to edit an address.
     *
     * @param array{address_id: string} $params An associative array
     *     - address_id: The address id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAddress
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnAddressId(array $params, EditConstituentAddress $requestBody): mixed
    {
        assert(isset($params['address_id']), new ArgumentException("Parameter `address_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['address_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
