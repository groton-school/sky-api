<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\Timezone;

/**
 * @api
 */
class timezone extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/timezone";

    /**
     * Returns the current time zone set for the school.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\Timezone
     *
     * @api
     */
    public function getAll()
    {
        return new Timezone($this->send("get", [], []));
    }
}
