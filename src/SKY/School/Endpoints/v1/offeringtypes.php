<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\OfferingTypeCollection;

/**
 * @api
 */
class Offeringtypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/offeringtypes";

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
     * @return \Blackbaud\SKY\School\Components\OfferingTypeCollection Success
     *
     * @api
     */
    public function getAll(): OfferingTypeCollection
    {
        return new OfferingTypeCollection($this->send("get", [], []));
    }
}
