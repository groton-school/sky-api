<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\terms;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\AcademicSessionsOutputModel;

/**
 * @api
 */
class gradingPeriods extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/terms/{term_id}/gradingPeriods";

    /**
     * Returns a collection of grading periods for the specified `term_id`
     *
     * @param array{term_id: string} $params An associative array
     *     - term_id: sourcedId for the term
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\AcademicSessionsOutputModel
     *
     * @api
     */
    public function getByTerm(array $params)
    {
        return new AcademicSessionsOutputModel($this->send("get", ["{term_id}" => $params["term_id"]], []));
    }
}
