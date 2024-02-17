<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\UserOutputModel;
use Blackbaud\SKY\OneRoster\Objects\UsersOutputModel;

/**
 * @api
 */
class teachers extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/teachers/{id}";

    /**
     * Returns a collection of teacher user data.
     *
     * Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
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
     * Returns a single teacher user for the specified `id`.
     *
     * Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the teacher
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
