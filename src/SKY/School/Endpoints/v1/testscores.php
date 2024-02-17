<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\TestScoreCollection;

/**
 * @api
 */
class testscores extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/testscores/{user_id}";

    /**
     * Returns a collection of test scores.
     *
     * Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * @param array{user_id?: int} $params An associative array
     *     - user_id: (Optional) Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\TestScoreCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new TestScoreCollection($this->send("get", [], ["user_id" => $params["user_id"]]));
    }

    /**
     * Creates a test score for a student ```user_id```
     *
     * Requires the following role in the Education Management system:
     *
     * - Grading Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \int
     *
     * @api
     */
    public function post(array $params)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], []);
    }
}
