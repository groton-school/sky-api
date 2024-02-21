<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\TestScoreAdd;
use Blackbaud\SKY\School\Components\TestScoreCollection;
use Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes;

/**
 * @api
 */
class Testscores extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/testscores/{user_id}";

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes
     *   $_testtypes
     */
    public Testtypes $_testtypes;

    /**
     * Returns a collection of test scores.
     *
     * Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * @param ?int $user_id (Optional) Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\TestScoreCollection Success
     *
     * @api
     */
    public function filterBy(?int $user_id = null): TestScoreCollection
    {
        return new TestScoreCollection($this->send("get", [], ["user_id" => $user_id]));
    }

    /**
     * Creates a test score for a student ```user_id```
     *
     * Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * @param int $user_id Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\TestScoreAdd $requestBody
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function post(int $user_id, TestScoreAdd $requestBody): int
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Testscores\Testtypes
     *
     * @api
     */
    public function testtypes(): Testtypes
    {
        if ($this->_testtypes === null) {
            $this->_testtypes = new Testtypes($this->api);
        }
        return $this->_testtypes;
    }
}
