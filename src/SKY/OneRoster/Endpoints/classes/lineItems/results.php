<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\classes\lineItems;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\ResultsOutputModelSvc;

/**
 * @api
 */
class results extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems/{li_id}/results";

    /**
     * Returns a collection of results for the specified `class_id` and
     * `li_id`.
     *
     * @param array{class_id: string, li_id: string} $params An associative
     *   array
     *     - class_id: sourcedId for the class
     *     - li_id: sourcedId for the lineItem
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ResultsOutputModelSvc
     *
     * @api
     */
    public function getByClassAndLi(array $params)
    {
        return new ResultsOutputModelSvc($this->send("get", ["{class_id}" => $params["class_id"],
        "{li_id}" => $params["li_id"]], []));
    }
}
