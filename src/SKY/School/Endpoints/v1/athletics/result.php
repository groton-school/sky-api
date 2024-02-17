<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ResultCreate;

/**
 * @api
 */
class result extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/result";

    /**
     * Creates a result/score for the specified athletic game
     * ```schedule_id```.
     *
     * Existing IDs can be retrieved via the GET athletics schedules endpoint
     * as well as after a POST athletics game.
     *
     * Requires at least one of the following roles in the Education
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
     * @param Blackbaud\SKY\School\Objects\ResultCreate $requestBody
     *
     * @return \void
     *
     * @api
     */
    public function post(ResultCreate $requestBody)
    {
        return $this->send("post", [], [], $requestBody);
    }
}
