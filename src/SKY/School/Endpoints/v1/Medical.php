<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Allergies;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Allergiesconditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Athleticclearance;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Conditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Immunizations;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Medications;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Securityroles;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Securityroles
 *   $securityroles
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Allergiesconditions
 *   $allergiesconditions
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Medications
 *   $medications
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Immunizations
 *   $immunizations
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Allergies $allergies
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Conditions $conditions
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Athleticclearance
 *   $athleticclearance
 * @property \Blackbaud\SKY\School\Endpoints\V1\Medical\Users $users Routing
 *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users
 *
 * @api
 */
class Medical extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "securityroles" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Securityroles",
        "allergiesconditions" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Allergiesconditions",
        "medications" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Medications",
        "immunizations" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Immunizations",
        "allergies" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Allergies",
        "conditions" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Conditions",
        "athleticclearance" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Athleticclearance",
        "users" => "\Blackbaud\SKY\School\Endpoints\V1\Medical\Users",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Securityroles
     *   $_securityroles
     */
    protected ?Securityroles $_securityroles = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Allergiesconditions
     *   $_allergiesconditions
     */
    protected ?Allergiesconditions $_allergiesconditions = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Medications
     *   $_medications
     */
    protected ?Medications $_medications = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Immunizations
     *   $_immunizations
     */
    protected ?Immunizations $_immunizations = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Allergies $_allergies
     */
    protected ?Allergies $_allergies = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Conditions
     *   $_conditions
     */
    protected ?Conditions $_conditions = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Athleticclearance
     *   $_athleticclearance
     */
    protected ?Athleticclearance $_athleticclearance = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Medical\Users $_users Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users

     */
    protected ?Users $_users = null;
}
