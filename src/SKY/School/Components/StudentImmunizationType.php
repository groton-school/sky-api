<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student immunization type
 *
 * @property ?int $id The ID of immunization type
 * @property ?string $description The description of immunization type
 * @property ?bool $required Returns true if immunization type is required
 *   else false
 *
 * @api
 */
class StudentImmunizationType extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "description",
        "required",
    ];
}
