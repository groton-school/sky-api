<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\LineItemOutputModel;
use Blackbaud\SKY\OneRoster\Objects\LineItemsOutputModel;

/**
 * @api
 */
class lineItems extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/lineItems/{id}";

    /**
     * Returns a collection of lineItems.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\LineItemsOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new LineItemsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific lineItem.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the lineItem
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\LineItemOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new LineItemOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }

    /**
     * Returns the lineItem object that was created or updated.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the lineItem
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\LineItemOutputModel
     *
     * @api
     */
    public function put(array $params)
    {
        return new LineItemOutputModel($this->send("put", ["{id}" => $params["id"]], []));
    }
}
