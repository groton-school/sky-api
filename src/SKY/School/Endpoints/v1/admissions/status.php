<?php

namespace Blackbaud\SKY\School\Endpoints\v1\admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AdmissionsStatusesCollection;

/**
 * @api
 */
class status extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/admissions/status";

    /**
     * Returns a collection of admissions statuses.
     *
     * Requires one of the following roles in the Education Management system:
     *
     * - Admissions Manager
     *
     * - Platform Manager
     *
     * - SKY API Data Sync
     *
     * @return \Blackbaud\SKY\School\Objects\AdmissionsStatusesCollection
     *
     * @api
     */
    public function getAll()
    {
        return new AdmissionsStatusesCollection($this->send("get", [], []));
    }
}
