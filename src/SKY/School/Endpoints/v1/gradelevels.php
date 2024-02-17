<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\GradeLevelCollection;

/**
 * @api
 */
class gradelevels extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/gradelevels";

    /**
     * Returns a collection of core school grade levels.
     *
     * Requires at least one of the following roles in the Education
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
     * @return \Blackbaud\SKY\School\Objects\GradeLevelCollection
     *
     * @api
     */
    public function getAll()
    {
        return new GradeLevelCollection($this->send("get", [], []));
    }
}
