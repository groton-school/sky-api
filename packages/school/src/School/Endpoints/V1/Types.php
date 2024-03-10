<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Types\Attendancetypes;
use Blackbaud\SKY\School\Endpoints\V1\Types\Excusedtypes;
use Blackbaud\SKY\School\Endpoints\V1\Types\Excusedurationtypes;
use Blackbaud\SKY\School\Endpoints\V1\Types\Tables;
use Blackbaud\SKY\School\Endpoints\V1\Types\Tablevalues;

/**
 * Routing class for the subnamespace `Types`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Types\Attendancetypes
 *   $attendancetypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedurationtypes
 *   $excusedurationtypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedtypes
 *   $excusedtypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Types\Tables $tables
 * @property \Blackbaud\SKY\School\Endpoints\V1\Types\Tablevalues $tablevalues
 *
 * @api
 */
class Types extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "attendancetypes" => "\Blackbaud\SKY\School\Endpoints\V1\Types\Attendancetypes",
        "excusedurationtypes" => "\Blackbaud\SKY\School\Endpoints\V1\Types\Excusedurationtypes",
        "excusedtypes" => "\Blackbaud\SKY\School\Endpoints\V1\Types\Excusedtypes",
        "tables" => "\Blackbaud\SKY\School\Endpoints\V1\Types\Tables",
        "tablevalues" => "\Blackbaud\SKY\School\Endpoints\V1\Types\Tablevalues",
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Attendancetypes
     *   $_attendancetypes
     */
    protected Attendancetypes $_attendancetypes = null;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedurationtypes
     *   $_excusedurationtypes
     */
    protected Excusedurationtypes $_excusedurationtypes = null;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedtypes
     *   $_excusedtypes
     */
    protected Excusedtypes $_excusedtypes = null;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Tables $_tables
     */
    protected Tables $_tables = null;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Tablevalues $_tablevalues
     */
    protected Tablevalues $_tablevalues = null;
}
