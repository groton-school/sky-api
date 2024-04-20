<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\Timezone as Components_Timezone;

/**
 * @api
 */
class Timezone extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/timezone";

    /**
     * Returns the current time zone set for the school.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Components\Timezone Success
     */
    public function get(): Components_Timezone
    {
        return new Components_Timezone($this->send("get", [], []));
    }
}
