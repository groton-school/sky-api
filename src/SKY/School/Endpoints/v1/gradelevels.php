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
     * Returns a collection of core school grade levels.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Academic Group Manager</li><li>Schedule
     * Manager</li><li>Platform Manager</li><li>Any Manager Role</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\GradeLevelCollection Success
     */
    public function getAll(): GradeLevelCollection
    {
        return new GradeLevelCollection($this->send("get", [], []));
    }
}
