<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\LineItemsOutputModel;

/**
 * @api
 */
class lineItems extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems";

    /**
     * Returns a collection of lineItems for the specified `class_id`.
     *
     * @param array{class_id: string} $params An associative array
     *     - class_id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\LineItemsOutputModel
     *
     * @api
     */
    public function getByClass(array $params)
    {
        return new LineItemsOutputModel($this->send("get", ["{class_id}" => $params["class_id"]], []));
    }
}
