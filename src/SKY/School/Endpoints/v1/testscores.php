<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\TestScoreAdd;
use Blackbaud\SKY\School\Components\TestScoreCollection;
use Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes;

/**
 * Routing class for the subnamespace `Testscores`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes
 *   $testtypes
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
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes
     *   $_testtypes
     */
    protected Testtypes $_testtypes = null;

    /**
     * Returns a collection of test scores.<br></br>
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>Grading Manager</li></ul>
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\TestScoreCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(array $params): TestScoreCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new TestScoreCollection($this->send("get", [], ["user_id" => $user_id]));
    }

    /**
     * Creates a test score for a student ```user_id```<br />
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>Grading Manager</li></ul>
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
    public function post(array $params, TestScoreAdd $requestBody): int
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $params['user_id']], [], $requestBody);
    }
}
