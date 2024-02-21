<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student immunization
 *
 * @property string $immunization_type The ID or description of the
 *   immunization type
 * @property ?string $immunization_date The date of the immunization. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00``` Excluding a date here will clear the
 *   immunization from the student's immunizations.
 *
 * @api
 */
class StudentImmunization extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "immunization_type" => "string",
        "immunization_date" => "string",
    ];
}
