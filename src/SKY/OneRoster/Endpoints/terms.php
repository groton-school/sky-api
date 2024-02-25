<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModel;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Terms\GradingPeriods;

/**
 * Routing class for the subnamespace `Terms`
 *
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Terms\GradingPeriods
 *   $gradingPeriods
 *
 * @api
 */
class Terms extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/terms/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "gradingPeriods" => "\Blackbaud\SKY\OneRoster\Endpoints\Terms\GradingPeriods",
    ];

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Terms\GradingPeriods
     *   $_gradingPeriods
     */
    protected GradingPeriods $_gradingPeriods = null;

    /**
     * Returns a collection of terms.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel
     *   OK - It was possible to read the collection.
     */
    public function getAll(): AcademicSessionsOutputModel
    {
        return new AcademicSessionsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific term.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the term
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
