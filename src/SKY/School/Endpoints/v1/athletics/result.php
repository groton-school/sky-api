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
     * Creates a result/score for the specified athletic game
     * ```schedule_id```. <br />
     *
     * Existing IDs can be retrieved via the GET athletics schedules endpoint
     * as well as after a POST athletics game. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Team Schedule Manager</li><li>Page
     * Manager</li><li>Coach</li><li>Pending Coach</li></ul>
     *
     * @param \Blackbaud\SKY\School\Components\ResultCreate $requestBody
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(ResultCreate $requestBody): void
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
