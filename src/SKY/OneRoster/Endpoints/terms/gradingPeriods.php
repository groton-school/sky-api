<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Terms;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel;

/**
 * @api
 */
class GradingPeriods extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/terms/{term_id}/gradingPeriods";

    /**
     * Returns a collection of grading periods for the specified
     * <code>term_id</code>
     *
     * @param array{term_id: string} $params An associative array
     *     - term_id: sourcedId for the term
     *
     * @return \Blackbaud\SKY\OneRoster\Components\AcademicSessionsOutputModel
     *   OK - It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByTerm(array $params): AcademicSessionsOutputModel
    {
        assert(isset($params['term_id']), new ArgumentException("Parameter `term_id` is required"));

        return new AcademicSessionsOutputModel($this->send("get", ["{term_id}" => $params['term_id']], []));
    }
}
