<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\schedules;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\MasterScheduleDayCollection;

/**
 * @api
 */
class master extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/schedules/master";

    /**
     * Returns a collection of Master Schedule days within the date range
     * provided.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param array{level_num: int, start_date: string, end_date: string,
     *   offering_type?: int} $params An associative array
     *     - level_num: Format - int32. Level Number indicates which school
     *   you are working with.
     *     - start_date: Format - date-time (as date-time in RFC3339). Start
     *   of the date range (inclusive).  The earliest possible start_date is
     *   1/1/1900, any date entered before that date will be overwritten with
     *   1/1/1900.
     *     - end_date: Format - date-time (as date-time in RFC3339). End of
     *   the date range (inclusive). If the end_date is earlier than the
     *   start_date the end_date wil be overwritten with the start_date plus 7
     *   days.
     *     - offering_type: (Optional) Format - int32. Filters the results by
     *   a specific group type. Defaults to "All" offering types.
     *
     * @return \Blackbaud\SKY\School\Objects\MasterScheduleDayCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new MasterScheduleDayCollection($this->send("get", [], ["level_num" => $params["level_num"],
        "start_date" => $params["start_date"],
        "end_date" => $params["end_date"],
        "offering_type" => $params["offering_type"]]));
    }
}
