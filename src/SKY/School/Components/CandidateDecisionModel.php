<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $id
 * @property ?string $name
 * @property ?string $decision_type
 * @property ?int $decision_type_id
 * @property ?string $date
 *
 * @api
 */
class CandidateDecisionModel extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
        "decision_type",
        "decision_type_id",
        "date",
    ];
}
