<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users\emergencycontacts;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EmergencyContactChangeCollection;

/**
 * @api
 */
class changed extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/emergencycontacts/changed";

    /**
     * Returns a paginated collection of all emergency contacts for all users
     * that have had changes since the specified ```start_date```.
     *
     * If no date is specified then this returns a paginated collection of all
     * emergency contacts for all users.
     *
     * Use the last user's ID as the ```marker``` value to return the next set
     * of results.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{start_date?: string, marker?: int} $params An associative
     *   array - start_date: (Optional) Format - date-time (as date-time in
     *   RFC3339). The date to begin looking for changes. Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-16. - marker: (Optional) Format - int32. The user's ID to start
     *   at to return the next batch of data. Results will start with the next
     *   user in the result set.
     *
     * @return \Blackbaud\SKY\School\Objects\EmergencyContactChangeCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new EmergencyContactChangeCollection($this->send("get", [], ["start_date" => $params["start_date"],
        "marker" => $params["marker"]]));
    }
}
