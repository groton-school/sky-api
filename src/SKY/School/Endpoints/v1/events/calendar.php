<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Events;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\CalendarItemCollection;

/**
 * @api
 */
class Calendar extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/events/calendar";

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
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param ?string $start_date Format - date-time (as date-time in
     *   RFC3339).
     * @param ?string $end_date Format - date-time (as date-time in RFC3339).
     *
     * @return \Blackbaud\SKY\School\Components\CalendarItemCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?string $start_date, ?string $end_date): CalendarItemCollection
    {
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));
        assert($end_date !== null, new ArgumentException("Parameter `end_date` is required"));

        return new CalendarItemCollection($this->send("get", [], ["start_date" => $start_date,
        "end_date" => $end_date]));
    }
}
