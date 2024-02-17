<?php

namespace Blackbaud\SKY\School\Endpoints\v1\content;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ResourceCollection;

/**
 * @api
 */
class resources extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/resources";

    /**
     * Returns a collection of Resources Requires at least one of the
     * following roles in the Education Management System:
     *
     * - Parent
     *
     * - Faculty
     *
     * - Student
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @return \Blackbaud\SKY\School\Objects\ResourceCollection
     *
     * @api
     */
    public function getAll()
    {
        return new ResourceCollection($this->send("get", [], []));
    }
}
