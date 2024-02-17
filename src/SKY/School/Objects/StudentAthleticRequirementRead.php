<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Student athletic clearance requirement model
 *
 * @property int $id The ID of student athletic requirement
 * @property \Blackbaud\SKY\School\Objects\AthleticRequirementType
 *   $athletic_requirement_type Athletic requirement type
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $school_year
 * @property \Blackbaud\SKY\School\Objects\IdDescriptorField $season
 * @property bool $is_complete Returns true if athletic requirement exists for
 *   the student
 * @property string $athletic_requirement_date The date of athletic
 *   requirement. Use format ... Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 *
 * @api
 */
class StudentAthleticRequirementRead extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "id",
        "athletic_requirement_type",
        "school_year",
        "season",
        "is_complete",
        "athletic_requirement_date",
    ];
}
