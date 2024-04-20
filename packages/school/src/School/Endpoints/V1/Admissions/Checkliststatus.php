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
     * Returns a collection of admissions checklist statuses.
     *
     *  Requires the following role in the Education Management system:
     *
     * - Admissions Manager
     *
     * @return \Blackbaud\SKY\School\Components\AdmissionsChecklistStatusCollection
     *   Success
     */
    public function list_(): AdmissionsChecklistStatusCollection
    {
        return new AdmissionsChecklistStatusCollection($this->send("get", [], []));
    }
}
