<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ResultInputModelSvc;
use Blackbaud\SKY\OneRoster\Components\ResultOutputModelSvc;
use Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc;

/**
 * @api
 */
class Results extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/results/{id}";

    /**
     * Returns a collection of results.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc OK -
     *   It was possible to read the collection.
     */
    public function get(): ResultsOutputModelSvc
    {
        return new ResultsOutputModelSvc($this->send("get", [], []));
    }

    /**
     * Returns a specific result.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): ResultOutputModelSvc
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new ResultOutputModelSvc($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Returns the result object that was created or updated.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the result
     * @param \Blackbaud\SKY\OneRoster\Components\ResultInputModelSvc
     *   $requestBody input model for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function putById(array $params, ResultInputModelSvc $requestBody): ResultOutputModelSvc
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new ResultOutputModelSvc($this->send("put", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody));
    }

    /**
     * Deletes the specified result sourcedId.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc OK -
     *   Resource has been deleted.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): ResultsOutputModelSvc
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new ResultsOutputModelSvc($this->send("delete", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
