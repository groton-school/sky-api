<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?string $birthDate
 * @property ?string $sex
 * @property ?bool $americanIndianOrAlaskaNative
 * @property ?bool $asian
 * @property ?bool $blackOrAfricanAmerican
 * @property ?bool $nativeHawaiianOrOtherPacificIslander
 * @property ?bool $white
 * @property ?bool $demographicRaceTwoOrMoreRaces
 * @property ?bool $hispanicOrLatinoEthnicity
 * @property ?string $countryOfBirthCode
 * @property ?string $stateOfBirthAbbreviation
 * @property ?string $cityOfBirth
 * @property ?string $publicSchoolResidenceStatus
 * @property ?string $sourcedId
 * @property ?string $status
 * @property ?string $dateLastModified
 * @property ?array{...<string, string>} $metadata
 *
 * @api
 */
class ORDemographicModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "birthDate" => "string",
        "sex" => "string",
        "americanIndianOrAlaskaNative" => "bool",
        "asian" => "bool",
        "blackOrAfricanAmerican" => "bool",
        "nativeHawaiianOrOtherPacificIslander" => "bool",
        "white" => "bool",
        "demographicRaceTwoOrMoreRaces" => "bool",
        "hispanicOrLatinoEthnicity" => "bool",
        "countryOfBirthCode" => "string",
        "stateOfBirthAbbreviation" => "string",
        "cityOfBirth" => "string",
        "publicSchoolResidenceStatus" => "string",
        "sourcedId" => "string",
        "status" => "string",
        "dateLastModified" => "string",
        "metadata" => "array{...<string, string>}",
    ];
}
