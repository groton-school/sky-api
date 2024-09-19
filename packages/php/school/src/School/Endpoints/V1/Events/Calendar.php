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
     * @param array{start_date: string, end_date: string} $params An
     *   associative array
     *     - start_date: Format - date-time (as date-time in RFC3339).
     *     - end_date: Format - date-time (as date-time in RFC3339).
     *
     * @return \Blackbaud\SKY\School\Components\CalendarItemCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): CalendarItemCollection
    {
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));

        return new CalendarItemCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['start_date','end_date']), ARRAY_FILTER_USE_KEY)));
    }
}
