<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EmergencyContactChangeCollection;

/**
 * @api
 */
class Changed extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/emergencycontacts/changed";

    /**
     * Returns a paginated collection of all emergency contacts for all users
     * that have had changes since the specified ```start\_date```.
     *
     *  If no date is specified then this returns a paginated collection of
     * all emergency contacts for all users.
     *
     *  Use the last user's ID as the ```marker``` value to return the next
     * set of results.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param ?string $start_date Format - date-time (as date-time in
     *   RFC3339). The date to begin looking for changes. Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-16.
     * @param ?int $marker Format - int32. The user's ID to start at to return
     *   the next batch of data. Results will start with the next user in the
     *   result set.
     *
     * @return \Blackbaud\SKY\School\Components\EmergencyContactChangeCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?string $start_date, ?int $marker): EmergencyContactChangeCollection
    {
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));
        assert($marker !== null, new ArgumentException("Parameter `marker` is required"));

        return new EmergencyContactChangeCollection($this->send("get", [], ["start_date" => $start_date,
        "marker" => $marker]));
    }
}
