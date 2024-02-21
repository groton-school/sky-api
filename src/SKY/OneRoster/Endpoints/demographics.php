<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\DemographicOutputModel;
use Blackbaud\SKY\OneRoster\Components\DemographicsOutputModel;

/**
 * @api
 */
class Demographics extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/demographics/{id}";

    /**
     * Returns a collection of user's demographic data.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\DemographicsOutputModel
     *   Success
     *
     * @api
     */
    public function getAll(): DemographicsOutputModel
    {
        return new DemographicsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single user's demographic data for the specified `id`..
     *
     * @param string $id sourcedId for the user
     *
     * @return \Blackbaud\SKY\OneRoster\Components\DemographicOutputModel
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): DemographicOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new DemographicOutputModel($this->send("get", ["{id}" => $id], []));
    }
}
