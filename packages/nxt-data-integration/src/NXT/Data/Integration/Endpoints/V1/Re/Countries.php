<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\Country;
use Blackbaud\SKY\NXT\Data\Integration\Components\CountryCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\CountryCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\CountryEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Countries extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/countries/{id}";

    /**
     * Returns details about a country.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The country system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\Country Returned
     *   when the operation succeeds. The response body contains the country.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): Country
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new Country($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Deletes a country.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The country system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   country.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * Edit the details about a country.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The country system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CountryEdit
     *   $requestBody Description of changes for the country.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, CountryEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }

    /**
     * Returns a list of countries.
     *
     * @param array{limit: int, offset: int} $params An associative array
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\CountryCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of filtered countries.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): CountryCollection
    {
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new CountryCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['limit','offset']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Creates a new country.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CountryCreate
     *   $requestBody The country to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new country ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(CountryCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
