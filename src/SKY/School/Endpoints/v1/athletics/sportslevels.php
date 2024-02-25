<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\SportsLevelCollection;

/**
 * @api
 */
class Sportslevels extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/sportslevels";

    /**
     * Returns a collection of athletic sports levels.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Team Schedule Manager</li><li>Coach</li><li>Pending
     * Coach</li><li>Any Manager Role</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\SportsLevelCollection Success
     */
    public function getAll(): SportsLevelCollection
    {
        return new SportsLevelCollection($this->send("get", [], []));
    }
}
