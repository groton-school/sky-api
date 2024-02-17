<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\AcademicSessionOutputModel;
use Blackbaud\SKY\OneRoster\Objects\AcademicSessionsOutputModel;

/**
 * @api
 */
class terms extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/terms/{id}";

    /**
     * Returns a collection of terms.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\AcademicSessionsOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new AcademicSessionsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific term.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the term
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\AcademicSessionOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new AcademicSessionOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }
}
