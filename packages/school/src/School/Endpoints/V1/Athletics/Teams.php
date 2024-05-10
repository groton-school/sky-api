<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\TeamCollection;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule;

/**
 * Routing class for the subnamespace `Teams`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster $roster
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule
 *   $schedule Routing class for the subnamespace `Schedule`
 *
 * @api
 */
class Teams extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "roster" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster",
        "schedule" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster
     *   $_roster
     */
    protected ?Roster $_roster = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule
     *   $_schedule Routing class for the subnamespace `Schedule`
     */
    protected ?Schedule $_schedule = null;

    /**
     * Returns a collection of athletic teams for the current school year.
     *
     *  Use the optional ```school\_year``` parameter to specify a different
     * year.
     *
     *  Requires at least one of the following roles in the Education
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
     * @param array{school_year: string} $params An associative array
     *     - school_year: School year
     *
     * @return \Blackbaud\SKY\School\Components\TeamCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): TeamCollection
    {
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));

        return new TeamCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['school_year']), ARRAY_FILTER_USE_KEY)));
    }
}
