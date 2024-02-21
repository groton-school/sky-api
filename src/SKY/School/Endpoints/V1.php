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
 * @property \Blackbaud\SKY\School\Endpoints\V1\Roles $roles
 * @property \Blackbaud\SKY\School\Endpoints\V1\Years $years
 * @property \Blackbaud\SKY\School\Endpoints\V1\Levels $levels
 * @property \Blackbaud\SKY\School\Endpoints\V1\Gradelevels $gradelevels
 * @property \Blackbaud\SKY\School\Endpoints\V1\Offeringtypes $offeringtypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Terms $terms
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users $users
 * @property \Blackbaud\SKY\School\Endpoints\V1\Attendance $attendance
 * @property \Blackbaud\SKY\School\Endpoints\V1\Lists $lists
 * @property \Blackbaud\SKY\School\Endpoints\V1\Timezone $timezone
 * @property \Blackbaud\SKY\School\Endpoints\V1\Testscores $testscores
 * @property \Blackbaud\SKY\School\Endpoints\V1\Sessions $sessions
 * @property \Blackbaud\SKY\School\Endpoints\V1\Customfields $customfields
 * @property \Blackbaud\SKY\School\Endpoints\V1\Directories $directories
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics $academics Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Academics
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics $athletics Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Athletics
 * @property \Blackbaud\SKY\School\Endpoints\V1\Types $types Routing class for
 *   the namespace Blackbaud\SKY\School\Endpoints\V1\Types
 * @property \Blackbaud\SKY\School\Endpoints\V1\Admissions $admissions Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Admissions
 * @property \Blackbaud\SKY\School\Endpoints\V1\Venues $venues Routing class
 *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Venues
 * @property \Blackbaud\SKY\School\Endpoints\V1\Advisories $advisories Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Advisories
 * @property \Blackbaud\SKY\School\Endpoints\V1\Activities $activities Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Activities
 * @property \Blackbaud\SKY\School\Endpoints\V1\Events $events Routing class
 *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Events
 * @property \Blackbaud\SKY\School\Endpoints\V1\Dorms $dorms Routing class for
 *   the namespace Blackbaud\SKY\School\Endpoints\V1\Dorms
 * @property \Blackbaud\SKY\School\Endpoints\V1\Schedules $schedules Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Schedules
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content $content Routing class
 *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Content
 * @property \Blackbaud\SKY\School\Endpoints\V1\Degrees $degrees Routing class
 *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Degrees
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical $medical Routing class
 *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical
 *
 * @api
 */
class V1 extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "roles" => "\Blackbaud\SKY\School\Endpoints\V1\Roles",
        "years" => "\Blackbaud\SKY\School\Endpoints\V1\Years",
        "levels" => "\Blackbaud\SKY\School\Endpoints\V1\Levels",
        "gradelevels" => "\Blackbaud\SKY\School\Endpoints\V1\Gradelevels",
        "offeringtypes" => "\Blackbaud\SKY\School\Endpoints\V1\Offeringtypes",
        "terms" => "\Blackbaud\SKY\School\Endpoints\V1\Terms",
        "users" => "\Blackbaud\SKY\School\Endpoints\V1\Users",
        "attendance" => "\Blackbaud\SKY\School\Endpoints\V1\Attendance",
        "lists" => "\Blackbaud\SKY\School\Endpoints\V1\Lists",
        "timezone" => "\Blackbaud\SKY\School\Endpoints\V1\Timezone",
        "testscores" => "\Blackbaud\SKY\School\Endpoints\V1\Testscores",
        "sessions" => "\Blackbaud\SKY\School\Endpoints\V1\Sessions",
        "customfields" => "\Blackbaud\SKY\School\Endpoints\V1\Customfields",
        "directories" => "\Blackbaud\SKY\School\Endpoints\V1\Directories",
        "academics" => "\Blackbaud\SKY\School\Endpoints\V1\Academics",
        "athletics" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics",
        "types" => "\Blackbaud\SKY\School\Endpoints\V1\Types",
        "admissions" => "\Blackbaud\SKY\School\Endpoints\V1\Admissions",
        "venues" => "\Blackbaud\SKY\School\Endpoints\V1\Venues",
        "advisories" => "\Blackbaud\SKY\School\Endpoints\V1\Advisories",
        "activities" => "\Blackbaud\SKY\School\Endpoints\V1\Activities",
        "events" => "\Blackbaud\SKY\School\Endpoints\V1\Events",
        "dorms" => "\Blackbaud\SKY\School\Endpoints\V1\Dorms",
        "schedules" => "\Blackbaud\SKY\School\Endpoints\V1\Schedules",
        "content" => "\Blackbaud\SKY\School\Endpoints\V1\Content",
        "degrees" => "\Blackbaud\SKY\School\Endpoints\V1\Degrees",
        "medical" => "\Blackbaud\SKY\School\Endpoints\V1\Medical",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Roles $_roles
     */
    protected ?Roles $_roles = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Years $_years
     */
    protected ?Years $_years = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Levels $_levels
     */
    protected ?Levels $_levels = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Gradelevels $_gradelevels
     */
    protected ?Gradelevels $_gradelevels = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Offeringtypes $_offeringtypes
     */
    protected ?Offeringtypes $_offeringtypes = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Terms $_terms
     */
    protected ?Terms $_terms = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users $_users
     */
    protected ?Users $_users = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Attendance $_attendance
     */
    protected ?Attendance $_attendance = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Lists $_lists
     */
    protected ?Lists $_lists = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Timezone $_timezone
     */
    protected ?Timezone $_timezone = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Testscores $_testscores
     */
    protected ?Testscores $_testscores = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Sessions $_sessions
     */
    protected ?Sessions $_sessions = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Customfields $_customfields
     */
    protected ?Customfields $_customfields = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Directories $_directories
     */
    protected ?Directories $_directories = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics $_academics Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Academics
     */
    protected ?Academics $_academics = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics $_athletics Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Athletics
     */
    protected ?Athletics $_athletics = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Types $_types Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Types
     */
    protected ?Types $_types = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Admissions $_admissions
     *   Routing class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Admissions
     */
    protected ?Admissions $_admissions = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Venues $_venues Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Venues
     */
    protected ?Venues $_venues = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Advisories $_advisories
     *   Routing class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Advisories
     */
    protected ?Advisories $_advisories = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Activities $_activities
     *   Routing class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Activities
     */
    protected ?Activities $_activities = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Events $_events Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Events
     */
    protected ?Events $_events = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Dorms $_dorms Routing class
     *   for the namespace Blackbaud\SKY\School\Endpoints\V1\Dorms
     */
    protected ?Dorms $_dorms = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Schedules $_schedules Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Schedules
     */
    protected ?Schedules $_schedules = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content $_content Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Content
     */
    protected ?Content $_content = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Degrees $_degrees Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Degrees
     */
    protected ?Degrees $_degrees = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical $_medical Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical
     */
    protected ?Medical $_medical = null;
}
