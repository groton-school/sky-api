<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\SchoolSessionCollection;

/**
 * @api
 */
class Sessions extends BaseEndpoint
{
    /**
     * @var string $url
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
     * @param ?int $level_num (Optional) Format - int32. Filter for a specific
     *   ```level_num``` (level number)
     * @param ?string $school_year (Optional) Filter for a specific
     *   ```school_year``` (required format YYYY - YYYY (11 chars))
     *
     * @return \Blackbaud\SKY\School\Components\SchoolSessionCollection
     *   Success
     *
     * @api
     */
    public function filterBy(?int $level_num = null, ?string $school_year = null): SchoolSessionCollection
    {
        return new SchoolSessionCollection($this->send("get", [], ["level_num" => $level_num,
        "school_year" => $school_year]));
    }
}
