<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\Timezone as TimezoneDisambiguate;

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
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Components\Timezone Success
     *
     * @api
     */
    public function getAll(): TimezoneDisambiguate
    {
        return new TimezoneDisambiguate($this->send("get", [], []));
    }
}
