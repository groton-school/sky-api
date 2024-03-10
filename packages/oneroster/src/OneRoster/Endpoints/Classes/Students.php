<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results;

/**
 * Routing class for the subnamespace `Students`
 *
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
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "results" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results",
    ];

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students\Results
     *   $_results
     */
    protected Results $_results = null;

    /**
     * Returns a collection of student user data for the specified `class_id`.
     *
     * @param array{class_id: string} $params An associative array
     *     - class_id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModel Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByClassId(array $params): UsersOutputModel
    {
        assert(isset($params['class_id']), new ArgumentException("Parameter `class_id` is required"));

        return new UsersOutputModel($this->send("get", ["{class_id}" => $params['class_id']], []));
    }
}
