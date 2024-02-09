<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Candidate Create
 *
 * @property int $user_id
 * @property string $entering_year
 * @property int $entering_grade_id
 * @property int $checklist_id
 * @api
 */
class CandidateCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","entering_year","entering_grade_id","checklist_id"];
}
