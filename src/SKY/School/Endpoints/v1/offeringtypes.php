<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\OfferingTypeCollection;

/**
 * @api
 */
class offeringtypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/offeringtypes";

    /**
     * Returns a collection of core school offering types.
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
     * @return \Blackbaud\SKY\School\Objects\OfferingTypeCollection
     *
     * @api
     */
    public function getAll()
    {
        return new OfferingTypeCollection($this->send("get", [], []));
    }
}
