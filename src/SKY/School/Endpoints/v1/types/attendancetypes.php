<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\AttendanceTypes;

/**
 * @api
 */
class Attendancetypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/types/attendancetypes";

    /**
     * Returns a collection of attendance types.
     *
     *  Requires the following role in the Education Management system:
     *
     * - SKY API Basic
     *
     * @return \Blackbaud\SKY\School\Components\AttendanceTypes Success
     */
    public function getAllBy(): AttendanceTypes
    {
        return new AttendanceTypes($this->send("get", [], []));
    }
}
