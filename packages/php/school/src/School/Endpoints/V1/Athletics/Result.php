<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\ResultCreate;

/**
 * @api
 */
class Result extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/result";

    /**
     * Creates a result/score for the specified athletic game ``` schedule\_id
     * ```.
     *
     *  Existing schedule IDs can be retrieved via the GET athletics schedules
     * endpoint as well as after calling POST athletics game.
     *
     *  NOTE: There are two types of game results: Team vs team scores
     * (schedule\_type: 0) and Team placement or team total points scores
     * (schedule\_type: 1). The score reporting for the two types is
     * distinctly different.
     *
     * **For team vs team scores**
     *
     *  Each opponent will list in the opponents array with a value for
     * ```win\_loss```, ```score``` and ```score\_versus```.
     *
     *  Example: ``` { "schedule\_id": 1331482, "send\_notification": false,
     * "schedule\_type": 0, "opponents": \[ { "opponent\_id": 41406,
     * "win\_loss": "Win", "score": "5", "score\_versus": "2", }, {
     * "opponent\_id": 41407, "win\_loss": "Loss", "score": "1",
     * "score\_versus": "3", } \] } ``` **For team placement or team total
     * points scores**
     *
     *  The Home team **and** each opponent will list in the opponents array
     * with a value for ```score``` but only the home team will have a value
     * for ```win\_loss``` and ```score\_versus``` can be omitted for all. The
     * home team�s ```opponent\_id``` will be -1 in the opponents array.
     *
     *  Example: ``` { "schedule\_id": 1331482, "send\_notification": false,
     * "schedule\_type": 1, "opponents": \[ { "opponent\_id": -1, "score":
     * "1st", "win\_loss": "Win" }, { "opponent\_id": 41406, "score": "2nd",
     * "win\_loss": "" }, { "opponent\_id": 41407, "score": "3rd",
     * "win\_loss": "" } \] } ```
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Team Schedule Manager
     *
     * - Page Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param \Blackbaud\SKY\School\Components\ResultCreate $requestBody
     *
     * @return mixed Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(ResultCreate $requestBody): mixed
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
