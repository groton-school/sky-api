<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\UserOutputModel;
use Blackbaud\SKY\OneRoster\Objects\UsersOutputModel;

/**
 * @api
 */
class users extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/users/{id}";

    /**
     * Returns a collection of user data.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\UsersOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new UsersOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single user for the specified `id`.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the user
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\UserOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new UserOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }
}
