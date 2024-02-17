<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student immunization
 *
 * @property string $immunization_type The ID or description of the
 *   immunization type
 * @property string $immunization_date The date of the immunization. Use
 *   format ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00``` Excluding a date here will clear the
 *   immunization from the student's immunizations.
 *
 * @api
 */
class StudentImmunization extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "immunization_type",
        "immunization_date",
    ];
}
