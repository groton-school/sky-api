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
     * Returns a collection of admissions statuses.<br />
     *
     * Requires one of the following roles in the Education Management system:
     *
     * <ul><li>Admissions Manager</li><li>Platform Manager</li><li>SKY API
     * Data Sync</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\AdmissionsStatusesCollection
     *   Success
     */
    public function getAll(): AdmissionsStatusesCollection
    {
        return new AdmissionsStatusesCollection($this->send("get", [], []));
    }
}
