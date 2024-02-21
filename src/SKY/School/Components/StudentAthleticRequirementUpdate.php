<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student medication
 *
 * @property int $user_id The user ID of the student.
 * @property ?string $school_year The ID or label of the school year. Defaults
 *   to current school year.
 * @property string $season The ID of the athletic season.
 * @property \Blackbaud\SKY\School\Components\StudentAthleticRequirement[]
 *   $athletics_requirement An array of athletic requirement objects
 *
 * @api
 */
class StudentAthleticRequirementUpdate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "school_year" => "string",
        "season" => "string",
        "athletics_requirement" => "\Blackbaud\SKY\School\Components\StudentAthleticRequirement[]",
    ];
}
