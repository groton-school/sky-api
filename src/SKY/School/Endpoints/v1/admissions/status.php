<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Admissions;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\AdmissionsStatusesCollection;

/**
 * @api
 */
class Status extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/admissions/status";

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
     * @return \Blackbaud\SKY\School\Components\AdmissionsStatusesCollectionSuccess

     *
     * @api
     */
    public function getAll(): AdmissionsStatusesCollection
    {
        return new AdmissionsStatusesCollection($this->send("get", [], []));
    }
}
