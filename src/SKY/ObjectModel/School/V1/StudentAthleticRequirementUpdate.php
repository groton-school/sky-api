<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* Student medication
*
* @property int $user_id
* @property string|null $school_year
* @property string $season
* @property StudentAthleticRequirement[] $athletics_requirement
@api
*/
class StudentAthleticRequirementUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","school_year","season","athletics_requirement"];
}
