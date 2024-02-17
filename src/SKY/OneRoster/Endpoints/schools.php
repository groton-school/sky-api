<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\OrgOutputModel;
use Blackbaud\SKY\OneRoster\Objects\OrgsOutputModel;

/**
 * @api
 */
class schools extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{id}";

    /**
     * Returns a collection of schools.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\OrgsOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new OrgsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific school.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\OrgOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new OrgOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }
}
