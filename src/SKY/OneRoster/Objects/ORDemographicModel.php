<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property string | null $birthDate 
 * @property string | null $sex 
 * @property bool | null $americanIndianOrAlaskaNative 
 * @property bool | null $asian 
 * @property bool | null $blackOrAfricanAmerican 
 * @property bool | null $nativeHawaiianOrOtherPacificIslander 
 * @property bool | null $white 
 * @property bool | null $demographicRaceTwoOrMoreRaces 
 * @property bool | null $hispanicOrLatinoEthnicity 
 * @property string | null $countryOfBirthCode 
 * @property string | null $stateOfBirthAbbreviation 
 * @property string | null $cityOfBirth 
 * @property string | null $publicSchoolResidenceStatus 
 * @property string | null $sourcedId 
 * @property string | null $status 
 * @property string | null $dateLastModified 
 * @property string[] | null $metadata 
 *
 * @api
 */
class ORDemographicModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["birthDate","sex","americanIndianOrAlaskaNative","asian","blackOrAfricanAmerican","nativeHawaiianOrOtherPacificIslander","white","demographicRaceTwoOrMoreRaces","hispanicOrLatinoEthnicity","countryOfBirthCode","stateOfBirthAbbreviation","cityOfBirth","publicSchoolResidenceStatus","sourcedId","status","dateLastModified","metadata"];
}
