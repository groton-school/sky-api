<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\CategoriesOutputModel;
use Blackbaud\SKY\OneRoster\Objects\CategoryOutputModel;

/**
 * @api
 */
class categories extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/categories/{id}";

    /**
     * Returns a collection of categories.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\CategoriesOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new CategoriesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific category.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the category
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\CategoryOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new CategoryOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }

    /**
     * Returns the category object that was created or updated.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the category
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\CategoryOutputModel
     *
     * @api
     */
    public function put(array $params)
    {
        return new CategoryOutputModel($this->send("put", ["{id}" => $params["id"]], []));
    }
}
