<?php

namespace Blackbaud\SKY\School\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics;
use Blackbaud\SKY\School\Endpoints\V1\Activities;
use Blackbaud\SKY\School\Endpoints\V1\Admissions;
use Blackbaud\SKY\School\Endpoints\V1\Advisories;
use Blackbaud\SKY\School\Endpoints\V1\Athletics;
use Blackbaud\SKY\School\Endpoints\V1\Attendance;
use Blackbaud\SKY\School\Endpoints\V1\Content;
use Blackbaud\SKY\School\Endpoints\V1\Customfields;
use Blackbaud\SKY\School\Endpoints\V1\Degrees;
use Blackbaud\SKY\School\Endpoints\V1\Directories;
use Blackbaud\SKY\School\Endpoints\V1\Dorms;
use Blackbaud\SKY\School\Endpoints\V1\Events;
use Blackbaud\SKY\School\Endpoints\V1\Gradelevels;
use Blackbaud\SKY\School\Endpoints\V1\Levels;
use Blackbaud\SKY\School\Endpoints\V1\Lists;
use Blackbaud\SKY\School\Endpoints\V1\Medical;
use Blackbaud\SKY\School\Endpoints\V1\Offeringtypes;
use Blackbaud\SKY\School\Endpoints\V1\Roles;
use Blackbaud\SKY\School\Endpoints\V1\Schedules;
use Blackbaud\SKY\School\Endpoints\V1\Sessions;
use Blackbaud\SKY\School\Endpoints\V1\Terms;
use Blackbaud\SKY\School\Endpoints\V1\Testscores;
use Blackbaud\SKY\School\Endpoints\V1\Timezone;
use Blackbaud\SKY\School\Endpoints\V1\Types;
use Blackbaud\SKY\School\Endpoints\V1\Users;
use Blackbaud\SKY\School\Endpoints\V1\Venues;
use Blackbaud\SKY\School\Endpoints\V1\Years;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1
 *
 * @api
 */
class V1 extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Roles $_roles
     */
    public Roles $_roles;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Years $_years
     */
    public Years $_years;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Levels $_levels
     */
    public Levels $_levels;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Gradelevels $_gradelevels
     */
    public Gradelevels $_gradelevels;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Offeringtypes $_offeringtypes
     */
    public Offeringtypes $_offeringtypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Terms $_terms
     */
    public Terms $_terms;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users $_users
     */
    public Users $_users;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Attendance $_attendance
     */
    public Attendance $_attendance;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Lists $_lists
     */
    public Lists $_lists;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Timezone $_timezone
     */
    public Timezone $_timezone;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Testscores $_testscores
     */
    public Testscores $_testscores;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Sessions $_sessions
     */
    public Sessions $_sessions;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Customfields $_customfields
     */
    public Customfields $_customfields;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Directories $_directories
     */
    public Directories $_directories;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics $_academics Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Academics
     */
    public Academics $_academics;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics $_athletics Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Athletics
     */
    public Athletics $_athletics;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types $_types Routing class for
     *   the namespace Blackbaud\SKY\School\Endpoints\V1\Types
     */
    public Types $_types;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Admissions $_admissions Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Admissions
     */
    public Admissions $_admissions;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Venues $_venues Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Venues
     */
    public Venues $_venues;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Advisories $_advisories Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Advisories
     */
    public Advisories $_advisories;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Activities $_activities Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Activities
     */
    public Activities $_activities;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Events $_events Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Events
     */
    public Events $_events;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Dorms $_dorms Routing class for
     *   the namespace Blackbaud\SKY\School\Endpoints\V1\Dorms
     */
    public Dorms $_dorms;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Schedules $_schedules Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Schedules
     */
    public Schedules $_schedules;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Content $_content Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Content
     */
    public Content $_content;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Degrees $_degrees Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Degrees
     */
    public Degrees $_degrees;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical $_medical Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical
     */
    public Medical $_medical;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Roles
     *
     * @api
     */
    public function roles(): Roles
    {
        if ($this->_roles === null) {
            $this->_roles = new Roles($this->api);
        }
        return $this->_roles;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Years
     *
     * @api
     */
    public function years(): Years
    {
        if ($this->_years === null) {
            $this->_years = new Years($this->api);
        }
        return $this->_years;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Levels
     *
     * @api
     */
    public function levels(): Levels
    {
        if ($this->_levels === null) {
            $this->_levels = new Levels($this->api);
        }
        return $this->_levels;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Gradelevels
     *
     * @api
     */
    public function gradelevels(): Gradelevels
    {
        if ($this->_gradelevels === null) {
            $this->_gradelevels = new Gradelevels($this->api);
        }
        return $this->_gradelevels;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Offeringtypes
     *
     * @api
     */
    public function offeringtypes(): Offeringtypes
    {
        if ($this->_offeringtypes === null) {
            $this->_offeringtypes = new Offeringtypes($this->api);
        }
        return $this->_offeringtypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Terms
     *
     * @api
     */
    public function terms(): Terms
    {
        if ($this->_terms === null) {
            $this->_terms = new Terms($this->api);
        }
        return $this->_terms;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users
     *
     * @api
     */
    public function users(): Users
    {
        if ($this->_users === null) {
            $this->_users = new Users($this->api);
        }
        return $this->_users;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Attendance
     *
     * @api
     */
    public function attendance(): Attendance
    {
        if ($this->_attendance === null) {
            $this->_attendance = new Attendance($this->api);
        }
        return $this->_attendance;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Lists
     *
     * @api
     */
    public function lists(): Lists
    {
        if ($this->_lists === null) {
            $this->_lists = new Lists($this->api);
        }
        return $this->_lists;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Timezone
     *
     * @api
     */
    public function timezone(): Timezone
    {
        if ($this->_timezone === null) {
            $this->_timezone = new Timezone($this->api);
        }
        return $this->_timezone;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Testscores
     *
     * @api
     */
    public function testscores(): Testscores
    {
        if ($this->_testscores === null) {
            $this->_testscores = new Testscores($this->api);
        }
        return $this->_testscores;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Sessions
     *
     * @api
     */
    public function sessions(): Sessions
    {
        if ($this->_sessions === null) {
            $this->_sessions = new Sessions($this->api);
        }
        return $this->_sessions;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Customfields
     *
     * @api
     */
    public function customfields(): Customfields
    {
        if ($this->_customfields === null) {
            $this->_customfields = new Customfields($this->api);
        }
        return $this->_customfields;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Directories
     *
     * @api
     */
    public function directories(): Directories
    {
        if ($this->_directories === null) {
            $this->_directories = new Directories($this->api);
        }
        return $this->_directories;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics
     *
     * @api
     */
    public function academics(): Academics
    {
        if ($this->_academics === null) {
            $this->_academics = new Academics($this->api);
        }
        return $this->_academics;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics
     *
     * @api
     */
    public function athletics(): Athletics
    {
        if ($this->_athletics === null) {
            $this->_athletics = new Athletics($this->api);
        }
        return $this->_athletics;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Types
     *
     * @api
     */
    public function types(): Types
    {
        if ($this->_types === null) {
            $this->_types = new Types($this->api);
        }
        return $this->_types;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Admissions
     *
     * @api
     */
    public function admissions(): Admissions
    {
        if ($this->_admissions === null) {
            $this->_admissions = new Admissions($this->api);
        }
        return $this->_admissions;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Venues
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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Advisories
     *
     * @api
     */
    public function advisories(): Advisories
    {
        if ($this->_advisories === null) {
            $this->_advisories = new Advisories($this->api);
        }
        return $this->_advisories;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Activities
     *
     * @api
     */
    public function activities(): Activities
    {
        if ($this->_activities === null) {
            $this->_activities = new Activities($this->api);
        }
        return $this->_activities;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Events
     *
     * @api
     */
    public function events(): Events
    {
        if ($this->_events === null) {
            $this->_events = new Events($this->api);
        }
        return $this->_events;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Dorms
     *
     * @api
     */
    public function dorms(): Dorms
    {
        if ($this->_dorms === null) {
            $this->_dorms = new Dorms($this->api);
        }
        return $this->_dorms;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Schedules
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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Content
     *
     * @api
     */
    public function content(): Content
    {
        if ($this->_content === null) {
            $this->_content = new Content($this->api);
        }
        return $this->_content;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Degrees
     *
     * @api
     */
    public function degrees(): Degrees
    {
        if ($this->_degrees === null) {
            $this->_degrees = new Degrees($this->api);
        }
        return $this->_degrees;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical
     *
     * @api
     */
    public function medical(): Medical
    {
        if ($this->_medical === null) {
            $this->_medical = new Medical($this->api);
        }
        return $this->_medical;
    }
}
