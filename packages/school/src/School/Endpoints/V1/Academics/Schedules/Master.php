<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\MasterScheduleDayCollection;

/**
 * @api
 */
class Master extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/schedules/master";

    /**
     * Returns a collection of Master Schedule days within the date range
     * provided.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param array{level_num: int, start_date: string, end_date: string,
     *   offering_type: int} $params An associative array
     *     - level_num: Format - int32. Level Number indicates which school
     *   you are working with.
     *     - start_date: Format - date-time (as date-time in RFC3339). Start
     *   of the date range (inclusive). The earliest possible start\_date is
     *   1/1/1900, any date entered before that date will be overwritten with
     *   1/1/1900.
     *     - end_date: Format - date-time (as date-time in RFC3339). End of
     *   the date range (inclusive). If the end\_date is earlier than the
     *   start\_date the end\_date wil be overwritten with the start\_date plus
     *   7 days.
     *     - offering_type: Format - int32. Filters the results by a specific
     *   group type. Defaults to "All" offering types.
     *
     * @return \Blackbaud\SKY\School\Components\MasterScheduleDayCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): MasterScheduleDayCollection
    {
        assert(isset($params['level_num']), new ArgumentException("Parameter `level_num` is required"));
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));
        assert(isset($params['offering_type']), new ArgumentException("Parameter `offering_type` is required"));

        return new MasterScheduleDayCollection($this->send("get", [], ["level_num" => $params['level_num'],
            "start_date" => $params['start_date'],
            "end_date" => $params['end_date'],
            "offering_type" => $params['offering_type']]));
    }
}
