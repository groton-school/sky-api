<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\SchoolSessionCollection;

/**
 * @api
 */
class Sessions extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/sessions";

    /**
     * Returns a collection of sessions for a higher education institution.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Platform Manager
     *
     * @param ?int $level_num Format - int32. Filter for a specific
     *   ```level\_num``` (level number)
     * @param ?string $school_year Filter for a specific ```school\_year```
     *   (required format YYYY - YYYY (11 chars))
     *
     * @return \Blackbaud\SKY\School\Components\SchoolSessionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?int $level_num, ?string $school_year): SchoolSessionCollection
    {
        assert($level_num !== null, new ArgumentException("Parameter `level_num` is required"));
        assert($school_year !== null, new ArgumentException("Parameter `school_year` is required"));

        return new SchoolSessionCollection($this->send("get", [], ["level_num" => $level_num,
        "school_year" => $school_year]));
    }
}
