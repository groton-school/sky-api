<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id 
 * @property string | null $name 
 * @property string | null $decision_type 
 * @property int | null $decision_type_id 
 * @property string | null $date 
 *
 * @api
 */
class CandidateDecisionModel extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","name","decision_type","decision_type_id","date"];
}
