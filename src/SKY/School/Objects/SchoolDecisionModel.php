<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id
 * @property string $name
 * @property string $decision_type
 * @property int $decision_type_id
 * @property string $date
 * @property string $expire_date
 * @property string $comment
 * @property \Blackbaud\SKY\School\Objects\CandidateDecisionModel
 *   $candidate_response
 *
 * @api
 */
class SchoolDecisionModel extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "name",
        "decision_type",
        "decision_type_id",
        "date",
        "expire_date",
        "comment",
        "candidate_response",
    ];
}
