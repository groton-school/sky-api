<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModel;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel;

/**
 * @api
 */
class GradingPeriods extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/gradingPeriods/{id}";

    /**
     * Returns a collection of grading periods.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel
     *   OK - It was possible to read the collection.
     */
    public function getAll(): AcademicSessionsOutputModel
    {
        return new AcademicSessionsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific grading period.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the grading period
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModel
     *   OK - It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function get(array $params): AcademicSessionOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new AcademicSessionOutputModel($this->send("get", ["{id}" => $params['id']], []));
    }
}
