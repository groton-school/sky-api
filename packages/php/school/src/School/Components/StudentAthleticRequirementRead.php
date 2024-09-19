<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student athletic clearance requirement model
 *
 * @property int $id The ID of student athletic requirement
 * @property \Blackbaud\SKY\School\Components\AthleticRequirementType
 *   $athletic_requirement_type Athletic requirement type
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $school_year
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $season
 * @property ?bool $is_complete Returns true if athletic requirement exists
 *   for the student
 * @property ?string $athletic_requirement_date The date of athletic
 *   requirement. Use format ... Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 *
 * @api
 */
class StudentAthleticRequirementRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "athletic_requirement_type" => "\Blackbaud\SKY\School\Components\AthleticRequirementType",
        "school_year" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
        "season" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
        "is_complete" => "bool",
        "athletic_requirement_date" => "string",
    ];
}
