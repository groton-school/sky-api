<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int|null $id
 * @property string|null $name
 * @property string|null $decision_type
 * @property int|null $decision_type_id
 * @property string|null $date
 * @property string|null $expire_date
 * @property string|null $comment
 * @property CandidateDecisionModel $candidate_response
 * @api
 */
class SchoolDecisionModel extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","decision_type","decision_type_id","date","expire_date","comment","candidate_response"];
}
