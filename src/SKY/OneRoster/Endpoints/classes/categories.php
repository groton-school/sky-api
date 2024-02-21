<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\CategoriesOutputModel;

/**
 * @api
 */
class Categories extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/categories";

    /**
     * Returns a collection of categories for a specified `class_id`.
     *
     * @param string $class_id sourcedId for the category
     *
     * @return \Blackbaud\SKY\OneRoster\Components\CategoriesOutputModelOK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getByClass(string $class_id): CategoriesOutputModel
    {
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));

        return new CategoriesOutputModel($this->send("get", ["{class_id}" => $class_id], []));
    }
}
