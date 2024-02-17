<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\SchoolSessionCollection;

/**
 * @api
 */
class sessions extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/sessions";

    /**
     * Returns a collection of sessions for a higher education institution.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * @param array{level_num?: int, school_year?: string} $params An
     *   associative array
     *     - level_num: (Optional) Format - int32. Filter for a specific
     *   ```level_num``` (level number)
     *     - school_year: (Optional) Filter for a specific ```school_year```
     *   (required format YYYY - YYYY (11 chars))
     *
     * @return \Blackbaud\SKY\School\Objects\SchoolSessionCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new SchoolSessionCollection($this->send("get", [], ["level_num" => $params["level_num"],
        "school_year" => $params["school_year"]]));
    }
}
