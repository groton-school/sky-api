<?php

namespace Blackbaud\SKY\School\Endpoints\v1\types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AttendanceTypes;

/**
 * @api
 */
class attendancetypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/attendancetypes";

    /**
     * Returns a collection of attendance types.
     *
     * Requires the following role in the Education Management system:
     *
     * - SKY API Basic
     *
     * @return \Blackbaud\SKY\School\Objects\AttendanceTypes
     *
     * @api
     */
    public function getAll()
    {
        return new AttendanceTypes($this->send("get", [], []));
    }
}
