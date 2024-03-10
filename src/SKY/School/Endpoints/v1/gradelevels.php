<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\GradeLevelCollection;

/**
 * @api
 */
class Gradelevels extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/gradelevels";

    /**
     * Returns a collection of core school grade levels.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * - Platform Manager
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Components\GradeLevelCollection Success
     */
    public function getAllBy(): GradeLevelCollection
    {
        return new GradeLevelCollection($this->send("get", [], []));
    }
}
