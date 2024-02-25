<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\SportCollection;

/**
 * @api
 */
class Sports extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/sports";

    /**
     * Returns a collection of athletic sports.<br />
     *
     * Use the optional ```season_id``` to filter the results by season.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Schedule Manager</li><li>Page
     * Manager</li><li>Coach</li><li>Pending Coach</li></ul>
     *
     * @param array{season_id: int} $params An associative array
     *     - season_id: Format - int32. Season ID
     *
     * @return \Blackbaud\SKY\School\Components\SportCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(array $params): SportCollection
    {
        assert(isset($params['season_id']), new ArgumentException("Parameter `season_id` is required"));

        return new SportCollection($this->send("get", [], ["season_id" => $season_id]));
    }
}
