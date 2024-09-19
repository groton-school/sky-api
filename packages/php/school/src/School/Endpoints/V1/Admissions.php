<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Candidates;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Checklists;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Checkliststatus;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Status;

/**
 * Routing class for the subnamespace `Admissions`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Admissions\Checklists
 *   $checklists
 * @property \Blackbaud\SKY\School\Endpoints\V1\Admissions\Candidates
 *   $candidates
 * @property \Blackbaud\SKY\School\Endpoints\V1\Admissions\Checkliststatus
 *   $checkliststatus
 * @property \Blackbaud\SKY\School\Endpoints\V1\Admissions\Status $status
 *
 * @api
 */
class Admissions extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "checklists" => "\Blackbaud\SKY\School\Endpoints\V1\Admissions\Checklists",
        "candidates" => "\Blackbaud\SKY\School\Endpoints\V1\Admissions\Candidates",
        "checkliststatus" => "\Blackbaud\SKY\School\Endpoints\V1\Admissions\Checkliststatus",
        "status" => "\Blackbaud\SKY\School\Endpoints\V1\Admissions\Status",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Admissions\Checklists
     *   $_checklists
     */
    protected ?Checklists $_checklists = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Admissions\Candidates
     *   $_candidates
     */
    protected ?Candidates $_candidates = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Admissions\Checkliststatus
     *   $_checkliststatus
     */
    protected ?Checkliststatus $_checkliststatus = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Admissions\Status $_status
     */
    protected ?Status $_status = null;
}
