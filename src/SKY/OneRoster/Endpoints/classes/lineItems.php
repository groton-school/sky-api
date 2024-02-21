<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\LineItemsOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems\Results;

/**
 * @api
 */
class LineItems extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems";

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems\Results
     *   $_results
     */
    public Results $_results;

    /**
     * Returns a collection of lineItems for the specified `class_id`.
     *
     * @param string $class_id sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\LineItemsOutputModel OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByClass(string $class_id): LineItemsOutputModel
    {
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));

        return new LineItemsOutputModel($this->send("get", ["{class_id}" => $class_id], []));
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems\Results
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
