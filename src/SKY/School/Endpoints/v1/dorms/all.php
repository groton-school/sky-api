<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Dorms;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\DormCollection;

/**
 * @api
 */
class All extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/dorms/all";

    /**
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Dorm Group Manager
     *
     * - Dorm Supervisor
     *
     * - Pending Dorm Supervisor
     *
     * @param ?int $level_number (Optional) Format - int32. Identifier for the
     *   school level
     * @param ?string $school_year (Optional) Identifier for the school year
     *
     * @return \Blackbaud\SKY\School\Components\DormCollection Success
     *
     * @api
     */
    public function filterBy(?int $level_number = null, ?string $school_year = null): DormCollection
    {
        return new DormCollection($this->send("get", [], ["level_number" => $level_number,
        "school_year" => $school_year]));
    }
}
