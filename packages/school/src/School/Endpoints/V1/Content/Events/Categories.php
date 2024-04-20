<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content\Events;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\EventsCategoryCollection;

/**
 * @api
 */
class Categories extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/content/events/categories";

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
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @return \Blackbaud\SKY\School\Components\EventsCategoryCollection
     *   Success
     */
    public function list_(): EventsCategoryCollection
    {
        return new EventsCategoryCollection($this->send("get", [], []));
    }
}
