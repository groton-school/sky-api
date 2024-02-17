<?php

namespace Blackbaud\SKY\School\Endpoints\v1\events;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\CalendarItemCollection;

/**
 * @api
 */
class calendar extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/events/calendar";

    /**
     * Returns a list of events for the calling user. Requires one of the
     * following roles in the Education Management system:
     *
     * - Student
     *
     * - Parent
     *
     * - Teacher
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{start_date?: string, end_date?: string} $params An
     *   associative array
     *     - start_date: (Optional) Format - date-time (as date-time in
     *   RFC3339).
     *     - end_date: (Optional) Format - date-time (as date-time in
     *   RFC3339).
     *
     * @return \Blackbaud\SKY\School\Objects\CalendarItemCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new CalendarItemCollection($this->send("get", [], ["start_date" => $params["start_date"],
        "end_date" => $params["end_date"]]));
    }
}
