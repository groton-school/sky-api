<?php

namespace Blackbaud\SKY\School\Endpoints\v1\dorms;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\DormCollection;

/**
 * @api
 */
class all extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/dorms/all";

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
     * @param array{level_number?: int, school_year?: string} $params An
     *   associative array
     *     - level_number: (Optional) Format - int32. Identifier for the
     *   school level
     *     - school_year: (Optional) Identifier for the school year
     *
     * @return \Blackbaud\SKY\School\Objects\DormCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new DormCollection($this->send("get", [], ["level_number" => $params["level_number"],
        "school_year" => $params["school_year"]]));
    }
}
