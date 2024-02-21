<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UserOutputModel;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Teachers\Classes;

/**
 * @api
 */
class Teachers extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/teachers/{id}";

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Teachers\Classes $_classes
     */
    public Classes $_classes;

    /**
     * Returns a collection of teacher user data.
     *
     * Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModel Success
     *
     * @api
     */
    public function getAll(): UsersOutputModel
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
     * @param string $id sourcedId for the teacher
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UserOutputModel Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): UserOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new UserOutputModel($this->send("get", ["{id}" => $id], []));
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Teachers\Classes
     *
     * @api
     */
    public function classes(): Classes
    {
        if ($this->_classes === null) {
            $this->_classes = new Classes($this->api);
        }
        return $this->_classes;
    }
}
