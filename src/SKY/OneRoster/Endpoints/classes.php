<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\ClassOutputModel;
use Blackbaud\SKY\OneRoster\Objects\ClassesOutputModel;

/**
 * @api
 */
class classes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{id}";

    /**
     * Returns a collection of classes.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ClassesOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new ClassesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific class.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\ClassOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new ClassOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }
}
