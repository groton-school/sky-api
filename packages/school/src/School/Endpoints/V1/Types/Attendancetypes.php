<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Types;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\AttendanceTypes as Components_AttendanceTypes;

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
    public function get(): Components_AttendanceTypes
    {
        return new Components_AttendanceTypes($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
