<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student condition update
 *
 * @property ?string $date_as_of The date the condition began. Use format ...
 *   Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $date_until The date the condition ended. Use format ...
 *   Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $notes The notes for the condition
 * @property ?\Blackbaud\SKY\School\Components\MedicalSecurityRole[]
 *   $role_access Array of roles. If a role is not included, default access will
 *   be set to true
 * @property ?\int[] $medications The list of student medication IDs for the
 *   condition. If included, this list will replace the existing list of
 *   medications.
 *
 * @api
 */
class StudentConditionUpdate extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "date_as_of",
        "date_until",
        "notes",
        "role_access",
        "medications",
    ];
}
