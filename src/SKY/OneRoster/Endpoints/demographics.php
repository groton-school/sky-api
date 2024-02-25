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
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/demographics/{id}";

    /**
     * Returns a collection of user's demographic data.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\DemographicsOutputModel
     *   Success
     */
    public function getAll(): DemographicsOutputModel
    {
        return new DemographicsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single user's demographic data for the specified
     * <code>id</code>..
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the user
     *
     * @return \Blackbaud\SKY\OneRoster\Components\DemographicOutputModel
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function get(array $params): DemographicOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new DemographicOutputModel($this->send("get", ["{id}" => $params['id']], []));
    }
}
