<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Student athletic clearance requirement model
 *
 * @property int $id
 * @property AthleticRequirementType $athletic_requirement_type Athletic requirement type
 * @property IdDescriptorField $school_year
 * @property IdDescriptorField $season
 * @property bool|null $is_complete
 * @property string|null $athletic_requirement_date
 * @api
 */
class StudentAthleticRequirementRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","athletic_requirement_type","school_year","season","is_complete","athletic_requirement_date"];
}
