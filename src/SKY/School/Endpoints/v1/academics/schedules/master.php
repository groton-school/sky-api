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
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param int $level_num Format - int32. Level Number indicates which
     *   school you are working with.
     * @param string $start_date Format - date-time (as date-time in RFC3339).
     *   Start of the date range (inclusive).  The earliest possible start_date
     *   is 1/1/1900, any date entered before that date will be overwritten with
     *   1/1/1900.
     * @param string $end_date Format - date-time (as date-time in RFC3339).
     *   End of the date range (inclusive). If the end_date is earlier than the
     *   start_date the end_date wil be overwritten with the start_date plus 7
     *   days.
     * @param ?int $offering_type (Optional) Format - int32. Filters the
     *   results by a specific group type. Defaults to "All" offering types.
     *
     * @return \Blackbaud\SKY\School\Components\MasterScheduleDayCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(int $level_num, string $start_date, string $end_date, ?int $offering_type = null): MasterScheduleDayCollection
    {
        assert($level_num !== null, new ArgumentException("Parameter `level_num` is required"));
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));
        assert($end_date !== null, new ArgumentException("Parameter `end_date` is required"));

        return new MasterScheduleDayCollection($this->send("get", [], ["level_num" => $level_num,
        "start_date" => $start_date,
        "end_date" => $end_date,
        "offering_type" => $offering_type]));
    }
}
