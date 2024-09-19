<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Testscores;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\TestScoreCollection;

/**
 * @api
 */
class All extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/testscores/all";

    /**
     * Returns a collection of test scores.
     *
     *  Requires one of the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * - Admissions Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{size?: int, page?: int, test_type: string, start_date:
     *   string, end_date: string, last_modified: string} $params An associative
     *   array
     *     - size: Format - int32. The number of records per page (Default
     *   record size is 100).
     *     - page: Format - int32. The page of results to start from (Default
     *   start page is 1).
     *     - test_type: Provide the ID or name of a test type to limit results
     *   to that test type.
     *     - start_date: Format - date-time (as date-time in RFC3339). Limits
     *   results to tests with a test date on or after the specified date. Use
     *   ISO 8601 date format.
     *     - end_date: Format - date-time (as date-time in RFC3339). Limits
     *   results to tests with a test date on or before the specified date. Use
     *   ISO 8601 date format.
     *     - last_modified: Format - date-time (as date-time in RFC3339).
     *   Limits results to tests created or modified after the specified date.
     *
     * @return \Blackbaud\SKY\School\Components\TestScoreCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): TestScoreCollection
    {
        assert(isset($params['test_type']), new ArgumentException("Parameter `test_type` is required"));
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));
        assert(isset($params['last_modified']), new ArgumentException("Parameter `last_modified` is required"));

        return new TestScoreCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['size','page','test_type','start_date','end_date','last_modified']), ARRAY_FILTER_USE_KEY)));
    }
}
