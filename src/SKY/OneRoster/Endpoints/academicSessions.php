<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\AcademicSessionOutputModel;
use Blackbaud\SKY\OneRoster\Objects\AcademicSessionsOutputModel;

/**
 * @api
 */
class academicSessions extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/academicSessions/{id}";

    /**
     * Returns a collection of academic sessions.
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
     * Returns a specific academic session.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the academic session
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
