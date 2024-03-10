<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $relation_id
 * @property ?string $relation_description
 * @property ?string $relationship_type
 * @property ?string $reciprocal_relationship_type
 * @property ?string $date_from
 * @property ?string $date_to
 * @property ?string $notes
 *
 * @api
 */
class Relationship extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "relation_id" => "int",
        "relation_description" => "string",
        "relationship_type" => "string",
        "reciprocal_relationship_type" => "string",
        "date_from" => "string",
        "date_to" => "string",
        "notes" => "string",
    ];
}
