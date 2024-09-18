<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\TestScoreAdd;
use Blackbaud\SKY\School\Components\TestScoreCollection;
use Blackbaud\SKY\School\Endpoints\V1\Testscores\All;
use Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes;

/**
 * Routing class for the subnamespace `Testscores`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes
 *   $testtypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Testscores\All $all
 *
 * @api
 */
class Testscores extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/testscores/{user_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "testtypes" => "\Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes",
        "all" => "\Blackbaud\SKY\School\Endpoints\V1\Testscores\All",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes
     *   $_testtypes
     */
    protected ?Testtypes $_testtypes = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Testscores\All $_all
     */
    protected ?All $_all = null;

    /**
     * Returns a collection of test scores.
     *
     *  Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * @param array{user_id: int, size?: int, page?: int} $params An
     *   associative array
     *     - user_id: Format - int32. The ID of the user.
     *     - size: Format - int32. The number of records per page (Default
     *   record size is 100).
     *     - page: Format - int32. The page of results to start from (Default
     *   start page is 1 and records per page is 100).
     *
     * @return \Blackbaud\SKY\School\Components\TestScoreCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): TestScoreCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new TestScoreCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['user_id','size','page']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Creates a test score for a student ```user\_id```
     *
     *  Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\TestScoreAdd $requestBody
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToUserId(array $params, TestScoreAdd $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
