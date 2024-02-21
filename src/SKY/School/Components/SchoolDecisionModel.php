<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id
 * @property ?string $name
 * @property ?string $decision_type
 * @property ?int $decision_type_id
 * @property ?string $date
 * @property ?string $expire_date
 * @property ?string $comment
 * @property \Blackbaud\SKY\School\Components\CandidateDecisionModel
 *   $candidate_response
 *
 * @api
 */
class SchoolDecisionModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
        "decision_type" => "string",
        "decision_type_id" => "int",
        "date" => "string",
        "expire_date" => "string",
        "comment" => "string",
        "candidate_response" => "\Blackbaud\SKY\School\Components\CandidateDecisionModel",
    ];
}
