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
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/academicSessions/{id}";

    /**
     * Returns a collection of academic sessions.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel
     *   OK - It was possible to read the collection.
     */
    public function get(): AcademicSessionsOutputModel
    {
        return new AcademicSessionsOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Returns a specific academic session.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the academic session
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModel
     *   OK - It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): AcademicSessionOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new AcademicSessionOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
