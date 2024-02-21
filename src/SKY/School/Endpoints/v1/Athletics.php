<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Highlights;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Locations;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Opponents;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Result;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Schedules;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Sports;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Sportslevels;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Transportationtypes;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Venues;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Athletics
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Sports $sports
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Schedules $schedules
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams $teams
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Sportslevels
 *   $sportslevels
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Venues $venues
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Transportationtypes
 *   $transportationtypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Locations $locations
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Opponents $opponents
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Highlights
 *   $highlights
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Result $result
 *
 * @api
 */
class Athletics extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "sports" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Sports",
        "schedules" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Schedules",
        "teams" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams",
        "sportslevels" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Sportslevels",
        "venues" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Venues",
        "transportationtypes" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Transportationtypes",
        "locations" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Locations",
        "opponents" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Opponents",
        "highlights" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Highlights",
        "result" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Result",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Sports $_sports
     */
    protected ?Sports $_sports = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Schedules
     *   $_schedules
     */
    protected ?Schedules $_schedules = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams $_teams
     */
    protected ?Teams $_teams = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Sportslevels
     *   $_sportslevels
     */
    protected ?Sportslevels $_sportslevels = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Venues $_venues
     */
    protected ?Venues $_venues = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Transportationtypes
     *   $_transportationtypes
     */
    protected ?Transportationtypes $_transportationtypes = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Locations
     *   $_locations
     */
    protected ?Locations $_locations = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Opponents
     *   $_opponents
     */
    protected ?Opponents $_opponents = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Highlights
     *   $_highlights
     */
    protected ?Highlights $_highlights = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Result $_result
     */
    protected ?Result $_result = null;
}
