<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModel;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Terms\GradingPeriods;

/**
 * @api
 */
class Terms extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/terms/{id}";

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Terms\GradingPeriods
     *   $_gradingPeriods
     */
    public GradingPeriods $_gradingPeriods;

    /**
     * Returns a collection of terms.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel
     *   OK - It was possible to read the collection.
     *
     * @api
     */
    public function getAll(): AcademicSessionsOutputModel
    {
        return new AcademicSessionsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific term.
     *
     * @param string $id sourcedId for the term
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionOutputModel
     *   OK - It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): AcademicSessionOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new AcademicSessionOutputModel($this->send("get", ["{id}" => $id], []));
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Terms\GradingPeriods
     *
     * @api
     */
    public function gradingPeriods(): GradingPeriods
    {
        if ($this->_gradingPeriods === null) {
            $this->_gradingPeriods = new GradingPeriods($this->api);
        }
        return $this->_gradingPeriods;
    }
}
