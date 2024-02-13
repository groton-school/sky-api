<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $user_id The user ID of the student.
 * @property string | null $school_year The ID or label of the school year.
 *   Defaults to current school year.
 * @property string $season The ID of the athletic season.
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\StudentAthleticRequirement[]
 *   $athletics_requirement An array of athletic requirement objects
 *
 * @api
 */
class StudentAthleticRequirementUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","school_year","season","athletics_requirement"];
}
