<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergies;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergiesconditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Athleticrequirements;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Conditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Immunizations;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Medications;

/**
 * Routing class for the subnamespace `Users`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergiesconditions
 *   $allergiesconditions
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Medications
 *   $medications
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Immunizations
 *   $immunizations
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Athleticrequirements
 *   $athleticrequirements
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergies
 *   $allergies
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Conditions
 *   $conditions
 *
 * @api
 */
class Users extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "allergiesconditions" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergiesconditions",
        "medications" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Medications",
        "immunizations" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Immunizations",
        "athleticrequirements" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Athleticrequirements",
        "allergies" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergies",
        "conditions" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Conditions",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergiesconditions
     *   $_allergiesconditions
     */
    protected ?Allergiesconditions $_allergiesconditions = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Medications
     *   $_medications
     */
    protected ?Medications $_medications = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Immunizations
     *   $_immunizations
     */
    protected ?Immunizations $_immunizations = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Athleticrequirements
     *   $_athleticrequirements
     */
    protected ?Athleticrequirements $_athleticrequirements = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergies
     *   $_allergies
     */
    protected ?Allergies $_allergies = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Conditions
     *   $_conditions
     */
    protected ?Conditions $_conditions = null;
}
