<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\ResultInputModelSvc;
use Blackbaud\SKY\OneRoster\Objects\ResultOutputModelSvc;
use Blackbaud\SKY\OneRoster\Objects\ResultsOutputModelSvc;

/**
 * @api
 */
class results extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/results/{id}";

    /**
     * Returns a collection of results.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ResultsOutputModelSvc
     *
     * @api
     */
    public function getAll()
    {
        return new ResultsOutputModelSvc($this->send("get", [], []));
    }

    /**
     * Returns a specific result.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ResultOutputModelSvc
     *
     * @api
     */
    public function get(array $params)
    {
        return new ResultOutputModelSvc($this->send("get", ["{id}" => $params["id"]], []));
    }

    /**
     * Returns the result object that was created or updated.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the result
     * @param Blackbaud\SKY\OneRoster\Objects\ResultInputModelSvc $requestBody
     *   input model for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ResultOutputModelSvc
     *
     * @api
     */
    public function put(array $params, ResultInputModelSvc $requestBody)
    {
        return new ResultOutputModelSvc($this->send("put", ["{id}" => $params["id"]], [], $requestBody));
    }

    /**
     * Deletes the specified result sourcedId.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the result
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ResultsOutputModelSvc
     *
     * @api
     */
    public function delete(array $params)
    {
        return new ResultsOutputModelSvc($this->send("delete", ["{id}" => $params["id"]], []));
    }
}
