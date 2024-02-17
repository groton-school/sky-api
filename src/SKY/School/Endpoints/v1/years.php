<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\YearCollection;

/**
 * @api
 */
class years extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/years";

    /**
     * Returns a collection of core school years.
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
     * @return \Blackbaud\SKY\School\Objects\YearCollection
     *
     * @api
     */
    public function getAll()
    {
        return new YearCollection($this->send("get", [], []));
    }
}
