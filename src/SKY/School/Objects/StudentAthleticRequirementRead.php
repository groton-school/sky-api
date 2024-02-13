<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student athletic clearance requirement model
 *
 * @property int $id The ID of student athletic requirement
 * @property
 *   \GrotonSchool\Blackbaud\SKY\School\Objects\AthleticRequirementType
 *   $athletic_requirement_type Athletic requirement type
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\IdDescriptorField
 *   $school_year 
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\IdDescriptorField
 *   $season 
 * @property bool | null $is_complete Returns true if athletic requirement
 *   exists for the student
 * @property string | null $athletic_requirement_date The date of athletic
 *   requirement. Use format ...
 *
 * @api
 */
class StudentAthleticRequirementRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","athletic_requirement_type","school_year","season","is_complete","athletic_requirement_date"];
}
