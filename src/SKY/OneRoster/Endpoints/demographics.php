<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\DemographicOutputModel;
use Blackbaud\SKY\OneRoster\Objects\DemographicsOutputModel;

/**
 * @api
 */
class demographics extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/demographics/{id}";

    /**
     * Returns a collection of user's demographic data.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\DemographicsOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new DemographicsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single user's demographic data for the specified `id`..
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the user
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\DemographicOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new DemographicOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }
}
