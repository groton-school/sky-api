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
 * @api
 */
class Athletics extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Sports $_sports
     */
    public Sports $_sports;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Schedules $_schedules
     */
    public Schedules $_schedules;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams $_teams
     */
    public Teams $_teams;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Sportslevels
     *   $_sportslevels
     */
    public Sportslevels $_sportslevels;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Venues $_venues
     */
    public Venues $_venues;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Transportationtypes
     *   $_transportationtypes
     */
    public Transportationtypes $_transportationtypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Locations $_locations
     */
    public Locations $_locations;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Opponents $_opponents
     */
    public Opponents $_opponents;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Highlights
     *   $_highlights
     */
    public Highlights $_highlights;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Result $_result
     */
    public Result $_result;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Sports
     *
     * @api
     */
    public function sports(): Sports
    {
        if ($this->_sports === null) {
            $this->_sports = new Sports($this->api);
        }
        return $this->_sports;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Schedules
     *
     * @api
     */
    public function schedules(): Schedules
    {
        if ($this->_schedules === null) {
            $this->_schedules = new Schedules($this->api);
        }
        return $this->_schedules;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams
     *
     * @api
     */
    public function teams(): Teams
    {
        if ($this->_teams === null) {
            $this->_teams = new Teams($this->api);
        }
        return $this->_teams;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Sportslevels
     *
     * @api
     */
    public function sportslevels(): Sportslevels
    {
        if ($this->_sportslevels === null) {
            $this->_sportslevels = new Sportslevels($this->api);
        }
        return $this->_sportslevels;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Venues
     *
     * @api
     */
    public function venues(): Venues
    {
        if ($this->_venues === null) {
            $this->_venues = new Venues($this->api);
        }
        return $this->_venues;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Transportationtypes

     *
     * @api
     */
    public function transportationtypes(): Transportationtypes
    {
        if ($this->_transportationtypes === null) {
            $this->_transportationtypes = new Transportationtypes($this->api);
        }
        return $this->_transportationtypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Locations
     *
     * @api
     */
    public function locations(): Locations
    {
        if ($this->_locations === null) {
            $this->_locations = new Locations($this->api);
        }
        return $this->_locations;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Opponents
     *
     * @api
     */
    public function opponents(): Opponents
    {
        if ($this->_opponents === null) {
            $this->_opponents = new Opponents($this->api);
        }
        return $this->_opponents;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Highlights
     *
     * @api
     */
    public function highlights(): Highlights
    {
        if ($this->_highlights === null) {
            $this->_highlights = new Highlights($this->api);
        }
        return $this->_highlights;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Result
     *
     * @api
     */
    public function result(): Result
    {
        if ($this->_result === null) {
            $this->_result = new Result($this->api);
        }
        return $this->_result;
    }
}
