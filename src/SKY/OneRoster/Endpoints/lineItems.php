<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\LineItemInputModel;
use Blackbaud\SKY\OneRoster\Components\LineItemOutputModel;
use Blackbaud\SKY\OneRoster\Components\LineItemsOutputModel;

/**
 * @api
 */
class LineItems extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/lineItems/{id}";

    /**
     * Returns a collection of lineItems.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\LineItemsOutputModel OK -
     *   It was possible to read the collection.
     *
     * @api
     */
    public function getAll(): LineItemsOutputModel
    {
        return new LineItemsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific lineItem.
     *
     * @param string $id sourcedId for the lineItem
     *
     * @return \Blackbaud\SKY\OneRoster\Components\LineItemOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): LineItemOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new LineItemOutputModel($this->send("get", ["{id}" => $id], []));
    }

    /**
     * Returns the lineItem object that was created or updated.
     *
     * @param string $id sourcedId for the lineItem
     * @param \Blackbaud\SKY\OneRoster\Components\LineItemInputModel
     *   $requestBody input model for the lineItem
     *
     * @return \Blackbaud\SKY\OneRoster\Components\LineItemOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function put(string $id, LineItemInputModel $requestBody): LineItemOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return new LineItemOutputModel($this->send("put", ["{id}" => $id], [], $requestBody));
    }
}
