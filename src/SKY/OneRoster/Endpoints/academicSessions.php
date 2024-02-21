<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModel;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel;

/**
 * @api
 */
class AcademicSessions extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/academicSessions/{id}";

    /**
     * Returns a collection of academic sessions.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModelOK
     *   - It was possible to read the collection.
     *
     * @api
     */
    public function getAll(): AcademicSessionsOutputModel
    {
        return new AcademicSessionsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific academic session.
     *
     * @param string $id sourcedId for the academic session
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModelOK
     *   - It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): AcademicSessionOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new AcademicSessionOutputModel($this->send("get", ["{id}" => $id], []));
    }
}
