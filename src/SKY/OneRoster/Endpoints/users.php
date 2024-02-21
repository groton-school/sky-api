<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UserOutputModel;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;

/**
 * @api
 */
class Users extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/users/{id}";

    /**
     * Returns a collection of user data.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModelSuccess
     *
     * @api
     */
    public function getAll(): UsersOutputModel
    {
        return new UsersOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single user for the specified `id`.
     *
     * @param string $id sourcedId for the user
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UserOutputModelSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): UserOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new UserOutputModel($this->send("get", ["{id}" => $id], []));
    }
}
