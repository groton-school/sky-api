<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc;

/**
 * @api
 */
class Results extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems/{li_id}/results";

    /**
     * Returns a collection of results for the specified `class_id` and
     * `li_id`.
     *
     * @param array{class_id: string, li_id: string} $params An associative
     *   array
     *     - class_id: sourcedId for the class
     *     - li_id: sourcedId for the lineItem
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByClassIdAndLiId(array $params): ResultsOutputModelSvc
    {
        assert(isset($params['class_id']), new ArgumentException("Parameter `class_id` is required"));
        assert(isset($params['li_id']), new ArgumentException("Parameter `li_id` is required"));

        return new ResultsOutputModelSvc($this->send("get", ["{class_id}" => $params['class_id'],
        "{li_id}" => $params['li_id']], []));
    }
}
