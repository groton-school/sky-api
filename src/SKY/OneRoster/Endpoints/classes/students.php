<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results;

/**
 * @api
 */
class Students extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/students";

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results
     *   $_results
     */
    public Results $_results;

    /**
     * Returns a collection of student user data for the specified `class_id`.
     *
     * @param string $class_id sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModel Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByClass(string $class_id): UsersOutputModel
    {
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));

        return new UsersOutputModel($this->send("get", ["{class_id}" => $class_id], []));
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results
     *
     * @api
     */
    public function results(): Results
    {
        if ($this->_results === null) {
            $this->_results = new Results($this->api);
        }
        return $this->_results;
    }
}
