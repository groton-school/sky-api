<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\LineItemsOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems\Results;

/**
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems\Results
 *   $results
 *
 * @api
 */
class LineItems extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "results" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems\Results",
    ];

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems\Results
     *   $_results
     */
    protected ?Results $_results = null;

    /**
     * Returns a collection of lineItems for the specified `class_id`.
     *
     * @param string $class_id sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\LineItemsOutputModelOK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getByClass(string $class_id): LineItemsOutputModel
    {
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));

        return new LineItemsOutputModel($this->send("get", ["{class_id}" => $class_id], []));
    }
}
