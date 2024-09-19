<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id
 * @property ?string $name
 * @property ?string $decision_type
 * @property ?int $decision_type_id
 * @property ?string $date
 *
 * @api
 */
class CandidateDecisionModel extends BaseComponent
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
    ];
}
