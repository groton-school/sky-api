<?php

namespace Blackbaud\SKY\School\Endpoints\v1\admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AdmissionsChecklistStatusCollection;

/**
 * @api
 */
class checkliststatus extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/admissions/checkliststatus";

    /**
     * Returns a collection of admissions checklist statuses.
     *
     * Requires the following role in the Education Management system:
     *
     * - Admissions Manager
     *
     * @return \Blackbaud\SKY\School\Objects\AdmissionsChecklistStatusCollection

     *
     * @api
     */
    public function getAll()
    {
        return new AdmissionsChecklistStatusCollection($this->send("get", [], []));
    }
}
