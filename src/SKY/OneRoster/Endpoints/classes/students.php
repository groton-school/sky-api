<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results;

/**
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results
 *   $results
 *
 * @api
 */
class Students extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/students";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "results" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results",
    ];

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results
     *   $_results
     */
    protected ?Results $_results = null;

    /**
     * Returns a collection of student user data for the specified `class_id`.
     *
     * @param string $class_id sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModelSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getByClass(string $class_id): UsersOutputModel
    {
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));

        return new UsersOutputModel($this->send("get", ["{class_id}" => $class_id], []));
    }
}
