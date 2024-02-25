<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\LocationCollection;
use Blackbaud\SKY\School\Components\LocationCreateModel;

/**
 * @api
 */
class Locations extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/locations";

    /**
     * Returns a collection of athletic locations. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending
     * Coach</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\LocationCollection Success
     */
    public function getAll(): LocationCollection
    {
        return new LocationCollection($this->send("get", [], []));
    }

    /**
     * Creates a new athletic location. <br />
     *
     * The location can optionally be tied to an opponent using the
     * ```opponent_id``` from the GET opponents endpoint. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending
     * Coach</li></ul>
     *
     * @param \Blackbaud\SKY\School\Components\LocationCreateModel
     *   $requestBody The location to be created
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(LocationCreateModel $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
