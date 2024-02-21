<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Assignment Type Model
 *
 * @property ?int $id The ID for the assignment type
 * @property ?string $name The name of the assignment type
 * @property ?string $percentage The calculated percentage for the assignment
 *   type for this section
 * @property ?float $weight The weight applied to the assignment type
 *
 * @api
 */
class AssignmentType extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
        "percentage",
        "weight",
    ];
}
