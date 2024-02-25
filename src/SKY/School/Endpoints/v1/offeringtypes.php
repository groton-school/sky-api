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
     * Returns a collection of core school offering types.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Academic Group Manager</li><li>Schedule
     * Manager</li><li>Platform Manager</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\OfferingTypeCollection Success
     */
    public function getAll(): OfferingTypeCollection
    {
        return new OfferingTypeCollection($this->send("get", [], []));
    }
}
