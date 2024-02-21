<?php

namespace Blackbaud\SKY\OneRoster\Components;

use Battis\OpenAPI\Client\BaseObject;

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
 * @property ?\string[] $metadata
 *
 * @api
 */
class ORDemographicModel extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "birthDate",
        "sex",
        "americanIndianOrAlaskaNative",
        "asian",
        "blackOrAfricanAmerican",
        "nativeHawaiianOrOtherPacificIslander",
        "white",
        "demographicRaceTwoOrMoreRaces",
        "hispanicOrLatinoEthnicity",
        "countryOfBirthCode",
        "stateOfBirthAbbreviation",
        "cityOfBirth",
        "publicSchoolResidenceStatus",
        "sourcedId",
        "status",
        "dateLastModified",
        "metadata",
    ];
}
