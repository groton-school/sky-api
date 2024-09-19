<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UserOutputModel;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;

/**
 * @api
 */
class Students extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/students/{id}";

    /**
     * Returns a collection of student user data.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModel Success
     */
    public function get(): UsersOutputModel
    {
        return new UsersOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a single student user for the specified ```id```.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the student
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UserOutputModel Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): UserOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new UserOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }
}
