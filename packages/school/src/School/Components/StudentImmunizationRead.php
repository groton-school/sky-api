<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medication
 *
 * @property int $id The ID of student immunization
 * @property \Blackbaud\SKY\School\Components\StudentImmunizationType
 *   $immunization_type Student immunization type
 * @property ?bool $is_complete Returns true if immunization exists for the
 *   student
 * @property ?string $immunization_date The date of immunization. Use format
 *   ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 *
 * @api
 */
class StudentImmunizationRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "immunization_type" => "\Blackbaud\SKY\School\Components\StudentImmunizationType",
        "is_complete" => "bool",
        "immunization_date" => "string",
    ];
}
