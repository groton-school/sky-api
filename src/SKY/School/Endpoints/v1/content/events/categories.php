<?php

namespace Blackbaud\SKY\School\Endpoints\v1\content\events;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EventsCategoryCollection;

/**
 * @api
 */
class categories extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/events/categories";

    /**
     * Returns a collection of Content Events Categories Requires at least one
     * of the following roles in the Education Management System:
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
     * @return \Blackbaud\SKY\School\Objects\EventsCategoryCollection
     *
     * @api
     */
    public function getAll()
    {
        return new EventsCategoryCollection($this->send("get", [], []));
    }
}
