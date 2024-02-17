<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\TeamCollection;

/**
 * @api
 */
class teams extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams";

    /**
     * Returns a collection of athletic teams for the current school year.
     *
     * Use the optional ```school_year``` parameter to specify a different
     * year.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param array{school_year?: string} $params An associative array
     *     - school_year: (Optional) School year
     *
     * @return \Blackbaud\SKY\School\Objects\TeamCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new TeamCollection($this->send("get", [], ["school_year" => $params["school_year"]]));
    }
}
