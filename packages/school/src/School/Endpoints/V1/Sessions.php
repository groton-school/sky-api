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
     * @param array{level_num: int, school_year: string} $params An
     *   associative array
     *     - level_num: Format - int32. Filter for a specific ```level\_num```
     *   (level number)
     *     - school_year: Filter for a specific ```school\_year``` (required
     *   format YYYY - YYYY (11 chars))
     *
     * @return \Blackbaud\SKY\School\Components\SchoolSessionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): SchoolSessionCollection
    {
        assert(isset($params['level_num']), new ArgumentException("Parameter `level_num` is required"));
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));

        return new SchoolSessionCollection($this->send("get", [], ["level_num" => $params['level_num'],
            "school_year" => $params['school_year']]));
    }
}
