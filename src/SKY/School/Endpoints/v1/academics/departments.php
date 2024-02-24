<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\DepartmentCollection;

/**
 * @api
 */
class Departments extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/departments";

    /**
     * Returns a collection of academic departments.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * - Any Manager Role
     *
     * @param ?int $level_id Format - int32. Level number.
     *
     * @return \Blackbaud\SKY\School\Components\DepartmentCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?int $level_id): DepartmentCollection
    {
        assert($level_id !== null, new ArgumentException("Parameter `level_id` is required"));

        return new DepartmentCollection($this->send("get", [], ["level_id" => $level_id]));
    }
}
