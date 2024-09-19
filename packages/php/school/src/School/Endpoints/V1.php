<?php

namespace Blackbaud\SKY\School\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics;
use Blackbaud\SKY\School\Endpoints\V1\Activities;
use Blackbaud\SKY\School\Endpoints\V1\Admissions;
use Blackbaud\SKY\School\Endpoints\V1\Advisories;
use Blackbaud\SKY\School\Endpoints\V1\Athletics;
use Blackbaud\SKY\School\Endpoints\V1\Attendance;
use Blackbaud\SKY\School\Endpoints\V1\Communitygroups;
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
 * Routing class for the subnamespace `V1`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Roles $roles
 * @property \Blackbaud\SKY\School\Endpoints\V1\Years $years
 * @property \Blackbaud\SKY\School\Endpoints\V1\Levels $levels
 * @property \Blackbaud\SKY\School\Endpoints\V1\Gradelevels $gradelevels
 * @property \Blackbaud\SKY\School\Endpoints\V1\Offeringtypes $offeringtypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Terms $terms
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users $users Routing class for
 *   the subnamespace `Users`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Attendance $attendance
 * @property \Blackbaud\SKY\School\Endpoints\V1\Lists $lists Routing class for
 *   the subnamespace `Lists`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Timezone $timezone
 * @property \Blackbaud\SKY\School\Endpoints\V1\Testscores $testscores Routing
 *   class for the subnamespace `Testscores`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Sessions $sessions
 * @property \Blackbaud\SKY\School\Endpoints\V1\Customfields $customfields
 * @property \Blackbaud\SKY\School\Endpoints\V1\Directories $directories
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics $academics Routing
 *   class for the subnamespace `Academics`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics $athletics Routing
 *   class for the subnamespace `Athletics`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Types $types Routing class for
 *   the subnamespace `Types`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Admissions $admissions Routing
 *   class for the subnamespace `Admissions`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Venues $venues Routing class
 *   for the subnamespace `Venues`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Advisories $advisories Routing
 *   class for the subnamespace `Advisories`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Activities $activities Routing
 *   class for the subnamespace `Activities`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Events $events Routing class
 *   for the subnamespace `Events`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Dorms $dorms Routing class for
 *   the subnamespace `Dorms`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Schedules $schedules Routing
 *   class for the subnamespace `Schedules`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content $content Routing class
 *   for the subnamespace `Content`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Degrees $degrees Routing class
 *   for the subnamespace `Degrees`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical $medical Routing class
 *   for the subnamespace `Medical`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Communitygroups
 *   $communitygroups Routing class for the subnamespace `Communitygroups`
 *
 * @api
 */
class V1 extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
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
        "communitygroups" => "\Blackbaud\SKY\School\Endpoints\V1\Communitygroups",
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
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users $_users Routing class
     *   for the subnamespace `Users`
     */
    protected ?Users $_users = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Attendance $_attendance
     */
    protected ?Attendance $_attendance = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Lists $_lists Routing class
     *   for the subnamespace `Lists`
     */
    protected ?Lists $_lists = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Timezone $_timezone
     */
    protected ?Timezone $_timezone = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Testscores $_testscores
     *   Routing class for the subnamespace `Testscores`
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
     *   class for the subnamespace `Academics`
     */
    protected ?Academics $_academics = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics $_athletics Routing
     *   class for the subnamespace `Athletics`
     */
    protected ?Athletics $_athletics = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Types $_types Routing class
     *   for the subnamespace `Types`
     */
    protected ?Types $_types = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Admissions $_admissions
     *   Routing class for the subnamespace `Admissions`
     */
    protected ?Admissions $_admissions = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Venues $_venues Routing class
     *   for the subnamespace `Venues`
     */
    protected ?Venues $_venues = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Advisories $_advisories
     *   Routing class for the subnamespace `Advisories`
     */
    protected ?Advisories $_advisories = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Activities $_activities
     *   Routing class for the subnamespace `Activities`
     */
    protected ?Activities $_activities = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Events $_events Routing class
     *   for the subnamespace `Events`
     */
    protected ?Events $_events = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Dorms $_dorms Routing class
     *   for the subnamespace `Dorms`
     */
    protected ?Dorms $_dorms = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Schedules $_schedules Routing
     *   class for the subnamespace `Schedules`
     */
    protected ?Schedules $_schedules = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content $_content Routing
     *   class for the subnamespace `Content`
     */
    protected ?Content $_content = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Degrees $_degrees Routing
     *   class for the subnamespace `Degrees`
     */
    protected ?Degrees $_degrees = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical $_medical Routing
     *   class for the subnamespace `Medical`
     */
    protected ?Medical $_medical = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Communitygroups
     *   $_communitygroups Routing class for the subnamespace `Communitygroups`

     */
    protected ?Communitygroups $_communitygroups = null;
}
