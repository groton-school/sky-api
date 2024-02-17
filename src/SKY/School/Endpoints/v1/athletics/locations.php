<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\LocationCollection;

/**
 * @api
 */
class locations extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/locations";

    /**
     * Returns a collection of athletic locations.
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
     * - Coach
     *
     * - Pending Coach
     *
     * @return \Blackbaud\SKY\School\Objects\LocationCollection
     *
     * @api
     */
    public function getAll()
    {
        return new LocationCollection($this->send("get", [], []));
    }

    /**
     * Creates a new athletic location.
     *
     * The location can optionally be tied to an opponent using the
     * ```opponent_id``` from the GET opponents endpoint.
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
     * - Coach
     *
     * - Pending Coach
     *
     * @return \int
     *
     * @api
     */
    public function post()
    {
        return $this->send("post", [], []);
    }
}
