<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ResultInputModelSvc;
use Blackbaud\SKY\OneRoster\Components\ResultOutputModelSvc;
use Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc;
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
    public function getAll(): ResultsOutputModelSvc
    {
        return new ResultsOutputModelSvc($this->send("get", [], []));
    }

    /**
     * Returns a specific result.
     *
     * @param string $id sourcedId for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function get(string $id): ResultOutputModelSvc
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new ResultOutputModelSvc($this->send("get", ["{id}" => $id], []));
    }

    /**
     * Returns the result object that was created or updated.
     *
     * @param string $id sourcedId for the result
     * @param \Blackbaud\SKY\OneRoster\Components\ResultInputModelSvc
     *   $requestBody input model for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function put(string $id, ResultInputModelSvc $requestBody): ResultOutputModelSvc
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return new ResultOutputModelSvc($this->send("put", ["{id}" => $id], [], $requestBody));
    }

    /**
     * Deletes the specified result sourcedId.
     *
     * @param string $id sourcedId for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc OK -
     *   Resource has been deleted.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function delete(string $id): ResultsOutputModelSvc
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new ResultsOutputModelSvc($this->send("delete", ["{id}" => $id], []));
    }
}
