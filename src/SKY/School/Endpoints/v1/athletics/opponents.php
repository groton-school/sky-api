<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\OpponentFlyweightCollection;
use Blackbaud\SKY\School\Objects\OpponentUpdateModel;

/**
 * @api
 */
class opponents extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/opponents";

    /**
     * Returns a collection of athletic opponents.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Page Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @return \Blackbaud\SKY\School\Objects\OpponentFlyweightCollection
     *
     * @api
     */
    public function getAll()
    {
        return new OpponentFlyweightCollection($this->send("get", [], []));
    }

    /**
     * Creates a new athletic opponent.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Schedule Manager
     *
     * - Page Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param Blackbaud\SKY\School\Objects\OpponentUpdateModel $requestBody
     *   The opponent to be created
     *
     * @return \int
     *
     * @api
     */
    public function post(OpponentUpdateModel $requestBody)
    {
        return $this->send("post", [], [], $requestBody);
    }
}
