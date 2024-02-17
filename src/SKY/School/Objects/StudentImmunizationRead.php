<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student medication
 *
 * @property int $id The ID of student immunization
 * @property \Blackbaud\SKY\School\Objects\StudentImmunizationType
 *   $immunization_type Student immunization type
 * @property bool $is_complete Returns true if immunization exists for the
 *   student
 * @property string $immunization_date The date of immunization. Use format
 *   ... Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 *
 * @api
 */
class StudentImmunizationRead extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "immunization_type",
        "is_complete",
        "immunization_date",
    ];
}
