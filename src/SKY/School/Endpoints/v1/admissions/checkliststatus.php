<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\AdmissionsChecklistStatusCollection;

/**
 * @api
 */
class Checkliststatus extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/admissions/checkliststatus";

    /**
     * Returns a collection of admissions checklist statuses.<br />
     *
     * Requires the following role in the Education Management system:
     *
     * <ul><li>Admissions Manager</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\AdmissionsChecklistStatusCollection
     *   Success
     */
    public function getAll(): AdmissionsChecklistStatusCollection
    {
        return new AdmissionsChecklistStatusCollection($this->send("get", [], []));
    }
}
