<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\DepartmentCollection;

/**
 * @api
 */
class departments extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/departments";

    /**
     * Returns a collection of academic departments.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * - Any Manager Role
     *
     * @param array{level_id?: int} $params An associative array
     *     - level_id: (Optional) Format - int32. Level number.
     *
     * @return \Blackbaud\SKY\School\Objects\DepartmentCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new DepartmentCollection($this->send("get", [], ["level_id" => $params["level_id"]]));
    }
}
