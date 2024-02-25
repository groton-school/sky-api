<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\OpponentFlyweightCollection;
use Blackbaud\SKY\School\Components\OpponentUpdateModel;

/**
 * @api
 */
class Opponents extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/opponents";

    /**
     * Returns a collection of athletic opponents. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Page Manager</li><li>Coach</li><li>Pending
     * Coach</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\OpponentFlyweightCollection
     *   Success
     */
    public function getAll(): OpponentFlyweightCollection
    {
        return new OpponentFlyweightCollection($this->send("get", [], []));
    }

    /**
     * Creates a new athletic opponent. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Schedule Manager</li><li>Page
     * Manager</li><li>Coach</li><li>Pending Coach</li></ul>
     *
     * @param \Blackbaud\SKY\School\Components\OpponentUpdateModel
     *   $requestBody The opponent to be created
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(OpponentUpdateModel $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
