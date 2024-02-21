<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\OrgOutputModel;
use Blackbaud\SKY\OneRoster\Components\OrgsOutputModel;

/**
 * @api
 */
class Orgs extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/orgs/{id}";

    /**
     * Returns a collection of organizations.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\OrgsOutputModelOK - It was
     *   possible to read the collection.
     *
     * @api
     */
    public function getAll(): OrgsOutputModel
    {
        return new OrgsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific org.
     *
     * @param string $id sourcedId for the org
     *
     * @return \Blackbaud\SKY\OneRoster\Components\OrgOutputModelOK - It was
     *   possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): OrgOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new OrgOutputModel($this->send("get", ["{id}" => $id], []));
    }
}
